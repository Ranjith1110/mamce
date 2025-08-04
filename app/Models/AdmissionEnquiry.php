<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone_no', 'address', 'course_type', 'course',
    ];
    protected $appends = [
        'created_time',
    ];
    public function getCreatedTimeAttribute()
    {
        return date('d M Y h:i A',strtotime($this->created_at));
    }
}
