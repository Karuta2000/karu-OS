<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Habit extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'description', 'user_id', 'HEXcolor'
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
            if ($user) {
                $habit->user_id = $user->id;
            }
            $habit->description = '';
        });
    }


    public function completed()
    {
        return $this->hasMany(HabitCompletition::class);
    }



    public function todayCompleted()
    {
        return $this->completed()->whereDate('completed_at', Carbon::today());
    }

    function isHexColorDark()
    {
        // Remove leading # if present
        $color = $this->HEXcolor;

        // Convert HEX to RGB
        $r = hexdec(substr($color, 0, 2));
        $g = hexdec(substr($color, 2, 2));
        $b = hexdec(substr($color, 4, 2));

        // Calculate relative luminance
        $luminance = 0.2126 * $r + 0.7152 * $g + 0.0722 * $b;

        //print $luminance;

        // Check if color is dark
        if ($luminance < 128) {
            return 'ffffff';
        } else {
            return '000000';
        }
    }
}
