<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'reg_no',
        'name',
        'address',
        'birth_date',
        'phone_number',
        'weight'
    ];
}
