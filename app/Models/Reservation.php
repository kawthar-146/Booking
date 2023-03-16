<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'tel_number',
        'email',
        'team_id',
        'res_date',
        'type'
    ];




    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
