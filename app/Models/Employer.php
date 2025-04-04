<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;
    protected $fillable = ['user_id', 'name']; // List only allowed fields


    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
