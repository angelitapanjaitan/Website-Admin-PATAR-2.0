<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeadOfFamily extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NIK',
        'expenses_id',
        'census_data_id',
        'village',
        'address',
        'full_name',
        'lass_education',
        'family_card_id',
        'type_of_work',
        'etnic',
        'status_of_residence',
        'age',
        'latrines_ownership',
        'widest_floor_type',
        'citizenship',
        'gender',
        'religion',
        'date_of_birth',
        'place_of_birth',
        'relationship_status_in_the_family',
        'marital_status'
    ];

    /**
     * @return BelongsTo expenses
     */
    public function expenses(): BelongsTo
    {
        return $this->belongsTo(Expenses::class);
    }

    /**
     * @return BelongsTo census_data
     */
    public function census_data(): BelongsTo
    {
        return $this->belongsTo(CensusData::class);
    }

    /**
     * @return HasMany members_of_family
     */
    public function members_of_family(): HasMany
    {
        return $this->hasMany(MemberOfFamily::class);
    }
}
