<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';
    protected $connection = 'pgsql';

    protected $fillable = [
        'crane_id',
        'path',
    ];

    protected $attributes = [
        'path' => './storage/app/public/crane/crane.jpg',
    ];
}
