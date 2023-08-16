<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        'title_videos',
        'iframe',
        'id_course',
        'id_users'
    ];
}
