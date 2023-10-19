<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =  [
        'title',
        'description',
        'slug',
        'image',
        'user_id',
    ];


    public function owner() {
        return $this->belongsTo(User::class ,'user_id');
    }


    public function nextArticle(): ?Article
    {
        return $this->where('id', '>', $this->id)->orderBy('id')->first();
    }

    public function articletags() {
        return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'tag_id');
    }

    public function previousArticle(): ?Article
    {
        return $this->where('id', '<', $this->id)->orderByDesc('id')->first();
    }

}
