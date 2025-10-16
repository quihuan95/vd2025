<?php

use Illuminate\Support\Facades\Route;

// Language switcher routes
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'vi'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);

        // Get the referer URL and modify it with new locale
        $referer = request()->header('referer');
        if ($referer) {
            $parsedUrl = parse_url($referer);
            $path = $parsedUrl['path'] ?? '/';

            // Remove existing locale from path if present
            $path = preg_replace('#^/(en|vi)(/|$)#', '/', $path);
            if ($path === '/') {
                $path = '';
            }

            // Build new URL with new locale
            $newUrl = '/' . $locale . $path;
            if (isset($parsedUrl['query'])) {
                $newUrl .= '?' . $parsedUrl['query'];
            }

            return redirect($newUrl);
        }

        // Fallback to home page with new locale
        return redirect('/' . $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Fallback route for root without locale
Route::get('/', function () {
    return redirect('/en');
});

// Group routes with locale prefix
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|vi'], 'middleware' => ['web', \App\Http\Middleware\SetLocale::class]], function () {

    // Home page
    Route::get('/', function () {
        return view('pages.home.index');
    })->name('home');

    // About pages
    Route::get('/about/wces2025', function () {
        return view('pages.about.wces2025');
    })->name('about.wces2025');

    // Programme pages
    Route::prefix('programme')->group(function () {
        Route::get('/agenda', [App\Http\Controllers\ProgrammeController::class, 'agenda'])->name('programme.agenda');
        Route::get('/images', [App\Http\Controllers\ProgrammeController::class, 'getImages'])->name('programme.images');

        Route::get('/1-nov', function () {
            return view('pages.programme.1-nov');
        })->name('programme.1-nov');

        // Legacy routes (keep for backward compatibility)
        Route::get('/6-nov', function () {
            return view('pages.programme.6-nov');
        })->name('programme.6-nov');

        Route::get('/7-nov', function () {
            return view('pages.programme.7-nov');
        })->name('programme.7-nov');

        Route::get('/8-nov', function () {
            return view('pages.programme.8-nov');
        })->name('programme.8-nov');

        Route::get('/day-1', function () {
            return view('pages.programme.day-1');
        })->name('programme.day-1');

        Route::get('/precongressworkshops', function () {
            return view('pages.programme.precongressworkshops');
        })->name('programme.precongressworkshops');

        Route::get('/mis-championship', function () {
            return view('pages.programme.mis-championship');
        })->name('programme.mis-championship');

        Route::get('/isopes', function () {
            return view('pages.programme.isopes');
        })->name('programme.isopes');

        Route::get('/obes', function () {
            return view('pages.programme.obes');
        })->name('programme.obes');
    });

    // User pages
    Route::prefix('user')->group(function () {
        Route::get('/login', function () {
            return view('pages.user.login');
        })->name('user.login');

        Route::get('/create', function () {
            return view('pages.user.create');
        })->name('user.create');

        Route::prefix('account')->group(function () {
            Route::get('/recover', function () {
                return view('pages.user.account.recover');
            })->name('user.account.recover');
        });
    });

    // Promotional Toolkit
    Route::get('/promotional-toolkit', function () {
        return view('pages.promotional.promotional-toolkit');
    })->name('promotional.toolkit');

    // Contact/FAQ
    Route::get('/faq', function () {
        return view('pages.contact.contact');
    })->name('contact.faq');

    // Committee Members
    Route::get('/committee-members', function () {
        return view('pages.committee.members');
    })->name('committee.members');

    // Invited Speakers
    Route::get('/invited-speakers', function () {
        return view('pages.invited.speakers');
    })->name('invited.speakers');

    // Sponsorship Opportunity
    Route::get('/sponsorship-opp', function () {
        return view('pages.sponsorship.opportunity');
    })->name('sponsorship.opportunity');

    // Official Sponsors
    Route::get('/official-sponsors', function () {
        return view('pages.sponsors.official');
    })->name('sponsors.official');

    // Attendance Guide
    Route::get('/attendance-guide', function () {
        return view('pages.attendance.guide');
    })->name('attendance.guide');

    // Registration
    Route::get('/registration', function () {
        return view('pages.registration.form');
    })->name('registration.form');

    Route::get('/registration/success', function () {
        return view('pages.registration.success');
    })->name('registration.success');

    // Singapore pages
    Route::prefix('singapore')->group(function () {
        Route::get('/venue', function () {
            return view('pages.singapore.venue');
        })->name('singapore.venue');

        Route::get('/accommodation', function () {
            return view('pages.singapore.accommodation');
        })->name('singapore.accommodation');

        Route::get('/visa-immigration', function () {
            return view('pages.singapore.visa-immigration');
        })->name('singapore.visa-immigration');

        Route::get('/yellow-fever-vaccination', function () {
            return view('pages.singapore.yellow-fever-vaccination');
        })->name('singapore.yellow-fever-vaccination');

        Route::get('/recent-health-advisory-updates', function () {
            return view('pages.singapore.recent-health-advisory-updates');
        })->name('singapore.recent-health-advisory-updates');

        Route::get('/experience-singapore', function () {
            return view('pages.singapore.experience-singapore');
        })->name('singapore.experience-singapore');
    });
});

// Registration POST route (no locale prefix)
Route::post('/registration', [App\Http\Controllers\RegistrationController::class, 'store'])->name('registration.store');

// Clear social media cache route
Route::get('/clear-social-cache', function () {
    return response()->json([
        'message' => 'Social media cache cleared. Please wait a few minutes before sharing again.',
        'timestamp' => now()->toISOString(),
        'cache_bust' => time()
    ]);
})->name('clear.social.cache');

// Debug social media meta tags
Route::get('/debug/social-meta', function () {
    return view('debug.social-meta');
})->name('debug.social-meta');

// Admin Routes (no locale prefix)
Route::prefix('admin')->name('admin.')->group(function () {
    // Login routes
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    // Protected admin routes
    Route::middleware('auth')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
        Route::get('/registrations', [App\Http\Controllers\AdminController::class, 'index'])->name('registrations.index');
        Route::get('/registrations/{registration}', [App\Http\Controllers\AdminController::class, 'show'])->name('registrations.show');
        Route::patch('/registrations/{registration}/status', [App\Http\Controllers\AdminController::class, 'updateStatus'])->name('registrations.update-status');
        Route::delete('/registrations/{registration}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('registrations.destroy');
        Route::get('/export', [App\Http\Controllers\AdminController::class, 'export'])->name('export');
    });
});

// Fallback routes without locale (redirect to English)
// Exclude static assets and admin routes from locale redirect
Route::get('/{any}', function () {
    $uri = request()->getRequestUri();

    // Don't redirect static assets, admin routes, or API routes
    if (
        preg_match('#\.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot|pdf|zip|doc|docx|xls|xlsx)$#i', $uri) ||
        str_starts_with($uri, '/admin') ||
        str_starts_with($uri, '/api') ||
        str_starts_with($uri, '/storage') ||
        str_starts_with($uri, '/favicon') ||
        str_starts_with($uri, '/build')
    ) {
        abort(404);
    }

    return redirect('/en' . $uri);
})->where('any', '.*');
