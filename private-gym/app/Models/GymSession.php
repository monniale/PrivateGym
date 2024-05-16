<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymSession extends Model
{
    use HasFactory;

    protected $table = 'gymsessions';

    protected $fillable = [
        'date',
        'duation',
        'notes'
    ];
}
