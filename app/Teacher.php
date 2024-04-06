<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name','last_name', 'banking_detail','school','subject','experience','phone','email','city','state','country',
        'password', 'postal_code','profile_image','teacher_status','is_active','status',
    ];
}
