<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    use HasFactory;
    protected $table = 'jenis';
    protected $fillable = [
        'jenis',
    ];

    public function bonekas()
    {
        return $this->hasMany(Boneka::class);
    }

}
