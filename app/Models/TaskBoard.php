<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskBoard extends Model
{
    use HasFactory;

    public $title;

    protected $fillable = ['title', 'description', 'user_id', 'color_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function color(){
        return $this->belongsTo(Color::class);
    }

}
