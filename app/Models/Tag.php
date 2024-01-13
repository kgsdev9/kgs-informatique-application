<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    public function articletags() {
        return $this->belongsToMany(Article::class, 'article_tag', 'tag_id', 'article_id');
    }

    public function courses() {
        return  $this->hasMany(Tag::class);
    }

}
