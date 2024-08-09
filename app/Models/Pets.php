<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pets extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'type',
        'birthday'
    ];

    /**
     * Get the petWalks associated with the Pets
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function relPetWalks(): HasOne
    {
        return $this->hasOne(PetsWalks::class, 'pet_id');
    }

}
