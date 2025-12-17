<?php

namespace App\Models;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    //
    use HasFactory;
    public function teacher()
    {
        return $this->hasMany(Teacher::class, 'id');
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class)->withDefault('john doe');
    // }
}
