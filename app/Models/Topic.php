<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;


    protected $fillable  = ['title', 'slug', 'description', 'user_id'];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
