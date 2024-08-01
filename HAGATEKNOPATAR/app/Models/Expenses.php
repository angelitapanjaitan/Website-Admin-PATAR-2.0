<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expenses extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cost_of_water_per_month',
        'electricity_costs_per_month'
    ];

    /**
     * @return HasMany heads_of_family
     */
    public function heads_of_family(): HasMany
    {
        return $this->hasMany(HeadOfFamily::class);
    }
}
