<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BisnisUnit extends Model
{
    use HasFactory;

    protected $table = 'bisnisunit';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];

}
