<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetsWalks extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pet_id',
        'location',
        'walk_date',
    ];

    /**
     * Get the pet associated with the PetsWalks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relPet(): BelongsTo
    {
        return $this->belongsTo(Pets::class, 'pet_id');
    }

}
