<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosUsers extends Model
{
    use HasFactory;
    protected $table = 'videos_users';
    protected $fillable = [
        'id_videos',
        'id_users',
        'status'
    ];
}
