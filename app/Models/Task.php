<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed', 'completed_at', 'user_id', 'task_board_id', 'status', 'priority', 'due'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function taskBoard(){
        return $this->belongsTo(TaskBoard::class);
    }

    
}
