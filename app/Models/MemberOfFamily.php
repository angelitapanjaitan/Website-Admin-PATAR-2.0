<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberOfFamily extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NIK',
        'head_of_families_id',
        'village',
        'address',
        'full_name',
        'lass_education',
        'type_of_work',
        'etnic',
        'age',
        'citizenship',
        'gender',
        'religion',
        'date_of_birth',
        'place_of_birth',
        'relationship_status_in_the_family',
        'marital_status'
    ];

    /**
     * @return BelongsTo head_of_families
     */
    public function head_of_families(): BelongsTo
    {
        return $this->belongsTo(HeadOfFamily::class);
    }
}
