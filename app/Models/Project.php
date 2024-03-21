<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'user_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function task_list(){
        return $this->hasOne(TaskList::class);
    }

    public function habits(){
        return $this->hasMany(Habit::class);
    }

}
