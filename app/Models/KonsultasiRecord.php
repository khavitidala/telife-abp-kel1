<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiRecord extends Model
{
    use HasFactory;
    protected $table = 'konsultasi_record';
    protected $primaryKey = 'konsultasi_id';
    public $timestamps = false;
}
