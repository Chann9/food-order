<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [

        'restoran_id',
        'nama_menu',
        'harga',
        'deskripsi',
        'stok',
        'tersedia'

    ];

    public function restoran()
    {
        return $this->belongsTo(Restoran::class);
    }
}