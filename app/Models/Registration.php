<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'registration_code',
        'full_name',
        'gender',
        'date_of_birth',
        'organization',
        'department',
        'event_type',
        'gala_dinner',
        'title',
        'email',
        'phone',
        'status',
        'notes',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'gala_dinner' => 'boolean',
    ];

    // Accessor for gender display
    public function getGenderDisplayAttribute()
    {
        $genders = [
            'male' => 'Nam',
            'female' => 'Nữ',
            'other' => 'Khác',
        ];

        return $genders[$this->gender] ?? $this->gender;
    }

    // Accessor for status display
    public function getStatusDisplayAttribute()
    {
        $statuses = [
            'pending' => 'Chờ duyệt',
            'approved' => 'Đã duyệt',
            'rejected' => 'Từ chối',
        ];

        return $statuses[$this->status] ?? $this->status;
    }

    public function getEventTypeDisplayAttribute()
    {
        $eventType = [
            'en' => [
                'pre_conference_workshop' => 'Pre-Conference Workshop (October 31st)',
                'university_hospital_international_scientific_conference' => 'Viet Duc University Hospital International Scientific Conference 2025 (November 1st)',
                'both' => 'Both'
            ],
            'vi' => [
                'pre_conference_workshop' => 'Tập huấn tiền Hội nghị (31/10)',
                'university_hospital_international_scientific_conference' => 'Hội nghị Khoa học Quốc tế Bệnh viện Hữu nghị Việt Đức 2025  (01/11)',
                'both' => 'Cả 2'
            ],
        ];

        $lang = app()->getLocale();
        
        return $eventType[$lang][$this->event_type] ?? $this->event_type;
    }

    // Accessor for gala dinner display
    public function getGalaDinnerDisplayAttribute()
    {
        $galaDinnerOptions = [
            'en' => [
                'yes' => 'Yes',
                'no' => 'No'
            ],
            'vi' => [
                'yes' => 'Có',
                'no' => 'Không'
            ],
        ];

        $lang = app()->getLocale();
        $value = $this->gala_dinner ? 'yes' : 'no';
        
        return $galaDinnerOptions[$lang][$value] ?? ($this->gala_dinner ? 'Yes' : 'No');
    }

    // Scope for filtering by status
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Scope for searching
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('registration_code', 'like', "%{$search}%")
                ->orWhere('full_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('organization', 'like', "%{$search}%")
                ->orWhere('phone', 'like', "%{$search}%");
        });
    }

    // Generate registration code
    public static function generateRegistrationCode()
    {
        $lastRegistration = self::orderBy('id', 'desc')->first();
        $nextNumber = $lastRegistration ? (intval(substr($lastRegistration->registration_code, 3)) + 1) : 1;
        return 'VD-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
    }
}
