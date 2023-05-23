<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
        'nama_usaha',
        'bidang_usaha',
        'nohp',
        'status',
        'image',
        'first_attemp',
    ];
}
