<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodTracking extends Model
{
    use HasFactory;
    protected $table = 'mood_tracking';
    protected $primaryKey = 'mood_id';
    public $timestamps = false;
}
