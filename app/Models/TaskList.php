<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'project_id', 'user_id'];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function project(){
        return $this->hasOne(Project::class);
    }


    public function tasks(){
        return $this->hasMany(Task::class);
    }
}