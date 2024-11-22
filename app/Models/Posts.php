<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasUuids;
    //protected $fillable = ['title', 'body', 'image_link'];
}
