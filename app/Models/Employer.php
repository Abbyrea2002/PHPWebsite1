<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
\\https://laracasts.com/series/30-days-to-learn-laravel-11/episodes/12?autoplay=true