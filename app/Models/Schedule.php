<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'owner_id',
    ];

    protected $casts = [
       // 'date' => 'datetime',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function slots(): HasMany
    {
        return $this->hasMany(Slot::class);
    }

    public function customerBike(): BelongsTo
    {
        return $this->belongsTo(CustomerBike::class);
    }
}
