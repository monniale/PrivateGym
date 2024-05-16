<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExercisesSession extends Model
{
    use HasFactory;

    protected $table = 'exercise_gymsessions';

    protected $fillable = [
        'exercise_id',
        'gymsession_id',
        'warmup_sets',
        'strength_sets',
        'iper_sets',
        'warmup_weight',
        'strength_weight',
        'iper_weight',
    ];
    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id');
    }
    public function gymsession()
    {
        return $this->belongsTo(GymSession::class, 'gymsession_id');
    }
}
