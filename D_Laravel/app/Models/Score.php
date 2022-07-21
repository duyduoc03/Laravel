<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';
    protected $primaryKey = 'scid';
    protected $keyType ='string';
    protected $fillable = [
        'scid',
        'mark',
        'result',
        'sid',
        'sbid',
        'created_at',
        'updated_at'
    ];
    public function students(){
        return $this->hasOne(Student::class,"sid","sid");
    }
    public function subjects(){
        return $this->hasOne(Subject::class,"sbid","sbid");
    }
    public function scopeSearchSV($query,$search=''){
        if ($search != null && $search != ''){
            return $query->where("name","like",'%'.$search."%");
        }
        return $query;
    }
    public function scopeSearchSB($query,$search=''){
        if ($search != null && $search != ''){
            return $query->where("name","like",'%'.$search."%");
        }
        return $query;
    }
}
