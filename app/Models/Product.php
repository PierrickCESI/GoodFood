<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'energy_kj',
        'energy_kcal',
        'fat',
        'saturated_fatty_acids',
        'carbs',
        'fiber',
        'protein',
        'salt',
        'image',
    ];
}
