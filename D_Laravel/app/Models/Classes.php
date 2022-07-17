<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Classes extends Authenticatable
{
    use HasFactory;

    protected $table = 'classes';
    protected  $primaryKey = 'sbid';
    protected $keyType = 'string';

    protected $fillable = [
        "name",
        "created_at",
        "updated_at"
    ];
}
