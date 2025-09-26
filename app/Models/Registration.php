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
        'title',
        'email',
        'phone',
        'status',
        'notes',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
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
