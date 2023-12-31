<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Tour extends Model
{
    use HasFactory, HasUuids;

    protected $fillable  = [
        'travel_id',
        'name',
        'starting_date',
        'ending_date',
        'price'
    ];

    public function travel(): BelongsTo
    {
        return $this->belongsTo(related: Travel::class);

    }

    public function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100
        );
    }
}
