<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Exports\RegistrationsExport;

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

        $registrations = $query->paginate(20);

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
        $sortOrder = $request->get('sort_order', 'desc');
        $query->orderBy($sortBy, $sortOrder);

        $registrations = $query->get();

        $filename = 'registrations_' . date('Y-m-d_H-i-s') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function () use ($registrations) {
            $file = fopen('php://output', 'w');

            // Add BOM for UTF-8
            fwrite($file, "\xEF\xBB\xBF");

            // CSV Headers
            fputcsv($file, [
                'Mã đăng ký',
                'ID',
                'Họ và tên',
                'Giới tính',
                'Ngày sinh',
                'Cơ quan',
                'Khoa/Phòng',
                'Chức vụ',
                'Email',
                'Số điện thoại',
                'Trạng thái',
                'Ghi chú',
                'Ngày đăng ký'
            ]);

            // CSV Data
            foreach ($registrations as $registration) {
                fputcsv($file, [
                    $registration->registration_code,
                    $registration->id,
                    $registration->full_name,
                    $registration->gender_display,
                    $registration->date_of_birth->format('d/m/Y'),
                    $registration->organization,
                    $registration->department,
                    $registration->title,
                    $registration->email,
                    $registration->phone,
                    $registration->status_display,
                    $registration->notes,
                    $registration->created_at->format('d/m/Y H:i')
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->back()->with('success', 'Xóa đăng ký thành công!');
    }
}
