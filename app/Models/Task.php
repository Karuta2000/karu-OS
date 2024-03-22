<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed', 'completed_at', 'user_id', 'project_id', 'task_list_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function taskList(){
        return $this->belongsTo(TaskList::class);
    }

    
}
