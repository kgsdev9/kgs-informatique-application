<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    use HasFactory;

    protected $fillable =  [
        'title',
        'description',
        'slug',
        'image',
        'mini_description',
        'user_id',
        'view'
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


    public function getFiledSearch(Builder $query): Builder
    {
        return $query->where(function ($query): void {
            $query->where('title')
                ->orWhereNull('approved_at')
                ->orWhereNull('published_at')
                ->orWhereNotNull('declined_at');
        });
    }



}
