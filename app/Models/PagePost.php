<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagePost extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'post_description',
        'post_photo',
        'post_status',
        'date'
    ];
}
