<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Habit extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($habit) {
            $user = Auth::user();
            if($user){
                $habit->user_id = $user->id;
            }
            $habit->description = '';
        });
    }

}
