<?php

namespace App\Jobs;

use App\Models\Registration;
use App\Mail\RegistrationConfirmationMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendAllRegistrationsToAdminJob implements ShouldQueue
{
    use Queueable;

    public $timeout = 300; // 5 phút timeout
    public $tries = 3; // Thử lại 3 lần nếu thất bại

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            // Lấy tất cả đăng ký
            $registrations = Registration::all();
            
            Log::info('🚀 Job: Starting to send all registrations to admin. Total: ' . $registrations->count());
            
            $successCount = 0;
            $errorCount = 0;
            
            foreach ($registrations as $registration) {
                try {
                    Mail::to('minhphamquang028@gmail.com')
                        ->send(new RegistrationConfirmationMail($registration));
                    
                    Log::info('✅ Job: Sent registration ' . $registration->registration_code . ' to admin');
                    $successCount++;
                    
                    // Thêm delay nhỏ để tránh spam
                    usleep(500000); // 0.5 giây delay
                } catch (\Exception $mailException) {
                    $errorCount++;
                    Log::error('❌ Job: Failed to send registration ' . $registration->registration_code . ' to admin - Error: ' . $mailException->getMessage());
                }
            }
            
            Log::info('✅ Job: Completed sending all registrations to admin - Success: ' . $successCount . ', Failed: ' . $errorCount);
            
        } catch (\Exception $e) {
            Log::error('❌ Job: Failed to send all registrations to admin - Error: ' . $e->getMessage());
            throw $e; // Re-throw để Laravel có thể retry job
        }
    }

    /**
     * Handle a job failure.
     */
    public function failed(\Throwable $exception): void
    {
        Log::error('❌ Job: SendAllRegistrationsToAdminJob failed completely - Error: ' . $exception->getMessage());
    }
}
