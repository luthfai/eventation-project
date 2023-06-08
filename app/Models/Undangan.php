<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'image_alt',
        'paket',
        'kategori'
    ];
    use HasFactory;
}
