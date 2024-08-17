<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Client extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'identify',
        'identify_type',
        'name',
        'email',
        'phone_number',
        'address'
    ];
}
