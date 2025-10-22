<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Exports\RegistrationsExport;
use App\Mail\AdminMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $query = Registration::query();

        // Search functionality
        if ($request->filled('search')) {
            $query->search($request->search);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        // Sort
        $sortBy = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');
        $query->orderBy($sortBy, $sortOrder);

        $registrations = $query->get();

        return view('admin.registrations.index', compact('registrations'));
    }

    public function show(Registration $registration)
    {
        return view('admin.registrations.show', compact('registration'));
    }

    public function updateStatus(Request $request, Registration $registration)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'notes' => 'nullable|string|max:1000',
        ]);

        $registration->update([
            'status' => $request->status,
            'notes' => $request->notes,
        ]);

        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công!');
    }

    public function export(Request $request)
    {
        $query = Registration::query();

        // Apply same filters as index
        if ($request->filled('search')) {
            $query->search($request->search);
        }

        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        $sortBy = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('sort_order', 'asc');
        $query->orderBy($sortBy, $sortOrder);

        $registrations = $query->get();

        $filename = 'registrations_' . date('Y-m-d_H-i-s') . '.xlsx';

        return Excel::download(new RegistrationsExport($registrations), $filename);
    }

    public function sendConfirmation(Registration $registration)
    {
        try {
            $subject = 'Xác nhận đăng ký tham dự - VDUHSC 2025 / Registration Confirmation - VDUHSC 2025';
            $content = '';

            // Gửi email xác nhận cho người đăng ký
            Mail::to($registration->email, $registration->full_name)
                ->send(new AdminMessageMail($registration, $subject, $content));

            return redirect()->back()->with('success', 'Email xác nhận đã được gửi thành công đến ' . $registration->full_name . '!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi gửi email xác nhận: ' . $e->getMessage());
        }
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->back()->with('success', 'Xóa đăng ký thành công!');
    }
}
