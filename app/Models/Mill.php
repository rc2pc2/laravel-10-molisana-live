<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'watermill',
        'region',
        'country',
        'size',
        'mills_no',
        'picture'
    ];
}
