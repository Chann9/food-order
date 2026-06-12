<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restorant extends Model
{
    protected $table = 'restorants';

    protected $fillable = [
        'nama',
        'gambar',
        'kategori',
        'jarak'
    ];
}