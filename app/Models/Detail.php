<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function penilaians(){
        return $this->hasMany('App\Models\Penilaian');
    }
}
