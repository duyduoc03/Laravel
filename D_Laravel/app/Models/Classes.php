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
        "cid",
        "name",
        "room",
        "created_at",
        "updated_at"
    ];
    public function students(){
        return $this->hasMany(Student::class,"cid","cid");
    }
    public function scopeSearchN($query,$search=''){
        if ($search != null && $search != ''){
            return $query->where("name","like",'%'.$search."%");
        }
        return $query;
    }
    public function scopeSearchR($query,$search=''){
        if ($search != null && $search != ''){
            return $query->where("room","like",'%'.$search."%");
        }
        return $query;
    }
}
