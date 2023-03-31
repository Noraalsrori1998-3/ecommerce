<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table=['rating'];
    protected $fillable = [
        'ratingNum',
        'product_id',
        'user_id',

    ];
}
