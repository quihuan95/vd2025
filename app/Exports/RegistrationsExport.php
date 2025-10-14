<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RegistrationsExport implements FromCollection, WithHeadings, WithMapping, WithStyles, WithColumnWidths
{
    protected $registrations;
    protected $counter = 0;

    public function __construct($registrations)
    {
        $this->registrations = $registrations;
    }

    public function collection()
    {
        return $this->registrations;
    }

    public function headings(): array
    {
        return [
            'Stt',
            'Mã đăng ký',
            'Họ và tên',
            'Giới tính',
            'Ngày sinh',
            'Cơ quan',
            'Khoa/Phòng',
            'Chức vụ',
            'Email',
            'Số điện thoại',
            // 'Trạng thái / Status'
        ];
    }

    public function map($registration): array
    {
        $this->counter++;
        return [
            $this->counter, // STT (số thứ tự)
            $registration->registration_code ?? '',
            $registration->full_name ?? '',
            $registration->gender_display ?? '',
            $registration->date_of_birth ? $registration->date_of_birth->format('d/m/Y') : '',
            $registration->organization ?? '',
            $registration->department ?? '',
            $registration->title ?? '',
            $registration->email ?? '',
            $registration->phone ?? '',
            // $registration->status_display ?? '',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold
            1 => [
                'font' => [
                    'bold' => true,
                    'size' => 12
                ],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => [
                        'rgb' => 'E3F2FD'
                    ]
                ]
            ],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 8,  // STT
            'B' => 20, // Mã đăng ký
            'C' => 25, // Họ và tên
            'D' => 12, // Giới tính
            'E' => 15, // Ngày sinh
            'F' => 25, // Cơ quan
            'G' => 20, // Khoa/Phòng
            'H' => 20, // Chức vụ
            'I' => 30, // Email
            'J' => 15, // Số điện thoại
        ];
    }
}
