<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tiket';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'divisi', 'bisnisunit', 'extention', 'alamatip', 'jenis', 'kategori', 'deskripsi'
    ];

}