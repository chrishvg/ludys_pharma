<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Client extends Model
{
    use  HasFactory;

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
