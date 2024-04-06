<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    protected $fillable = [
        'message','payment_method', 'payment_status','amount','is_anonymous','frequency','user_id','teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
