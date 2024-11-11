<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cellphone extends Model
{
    protected $fillable = [
        'model',
        'manufacturer',
        'price',
    ];

}
