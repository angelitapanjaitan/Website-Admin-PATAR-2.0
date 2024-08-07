<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CensusData extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'census_name',
        'schedule',
    ];

    /**
     * @return BelongsTo users
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany heads_of_family
     */
    public function heads_of_family(): HasMany
    {
        return $this->hasMany(HeadOfFamily::class);
    }
}
