<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id',
        'kedisiplinan',
        'komitmen',
        'kepatuhan',
        'tanggal'
    ];

    public function karyawan(){
        return $this->belongsTo('App\Models\Karyawan');
    }

    public function detail(){
        return $this->belongsTo('App\Models\Detail');
    }
}
