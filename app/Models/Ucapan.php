<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    protected $table = 'ucapans';

    protected $fillable = [
        'name',
        'attendance',
        'person_count',
        'message',
    ];
}