<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class YogaClass extends Model
{
    protected $guarded = [];
    // ... другие свойства и методы
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
    /**
     * Get the trainer associated with the yoga class.
     */
    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }
}