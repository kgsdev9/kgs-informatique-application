<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCast extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'video', 'description','url', 'user_id'];
}
