<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    use HasFactory;
    protected $table = 'mood';
    protected $primaryKey = 'mood_id';
    public $timestamps = false;
}
