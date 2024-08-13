<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boneka extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'bonekas';
    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'stok',
        'image',
    ];
}
