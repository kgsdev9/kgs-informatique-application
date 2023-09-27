<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disuction extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'tendance', 'user_id', 'topic_id'];

    public function owner() {
        return $this->belongsTo(User::class,'user_id');
    }

    //sujets de la discution
    public function topic() {
        return $this->belongsTo(Topic::class ,'topic_id');
    }

}
