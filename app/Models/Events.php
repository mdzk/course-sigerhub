<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'title_event',
        'slug',
        'picture',
        'date',
        'time',
        'location',
        'link',
        'tipe',
    ];
}
