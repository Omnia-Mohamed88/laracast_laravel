<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Make sure to import this

class Employer extends Model
{
    use HasFactory;

    // Define the one-to-many relationship with Job
    public function jobs() {
        return $this->hasMany(Job::class);
    }

    // Define the inverse of the relationship with User
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
