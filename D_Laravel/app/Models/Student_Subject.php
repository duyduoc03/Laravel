<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Subject extends Model
{
    use HasFactory;
    protected $table = 'student_subject';
    protected $keyType ='string';
    protected $fillable = [
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];
}
