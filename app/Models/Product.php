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
        'description',
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

    //Polymorphic relation
    public function product(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

    //Relationships
    public function restaurants(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Restaurant::class);
    }

    public function allergens(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Allergen::class);
    }

    public function purchases(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Purchase::class);
    }

    //Relationships INVERSE
    public function restaurant(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function allergen(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Allergen::class);
    }

    public function purchase(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Purchase::class);
    }
}
