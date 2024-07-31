<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    public function jobs(){ // relation between employer and jobs is that employer has many jobs
    return $this->hasMany(Job::class);
    }
}
