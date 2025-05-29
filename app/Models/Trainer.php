<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trainer extends Model
{
    // ... другие свойства и методы
    protected $guarded = [];
    /**
     * Get the yoga classes for the trainer.
     */
    public function yogaClasses(): HasMany
    {
        return $this->hasMany(YogaClass::class);
    }
}