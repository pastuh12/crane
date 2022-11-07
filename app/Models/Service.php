<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'servises';
    protected $primaryKey = 'id';
    protected $dateFormat = 'U';
    protected $connection = 'pgsql';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $attributes = [
        'description' => '',
    ];

}
