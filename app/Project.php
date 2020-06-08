<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = ['name' ,'description'];

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}
