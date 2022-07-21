<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $primaryKey = 'sbid';
    protected $keyType ='string';
    protected $fillable = [
        'sbid',
        'name',
        'created_at',
        'updated_at'
    ];
    public function scopeSearch($query,$search=''){
        if ($search != null && $search != ''){
            return $query->where("name","like",'%'.$search."%");
        }
        return $query;
    }
}
