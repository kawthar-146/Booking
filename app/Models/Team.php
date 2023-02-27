<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TeamType;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'phone', 'type']; 
    protected $casts = [ 'type'  => TeamType::class ];
} 
