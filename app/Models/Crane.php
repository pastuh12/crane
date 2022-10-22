<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crane extends Model
{
    use HasFactory;

    protected $table = 'cranes';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';
    protected $connection = 'pgsql';

    protected $fillable = [
        'model',
        'mark',
        'tipe',
        'cargo_moment',
        'max_boom_length',
        'min_boom_length',
        'max_load_capacity',
        'end_load_capacity',
        'description',
    ];

    protected $attributes = [
        'description' => '',
    ];


}
