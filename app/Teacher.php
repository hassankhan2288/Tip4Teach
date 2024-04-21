<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable implements MustVerifyEmail
{
    use HasFactory,Notifiable, HasApiTokens;
    protected $fillable = [
        'first_name','last_name', 'banking_detail','school','subject','experience','phone','email','city','state','country',
        'password', 'postal_code','profile_image','teacher_status','is_active','status',
    ];
}
