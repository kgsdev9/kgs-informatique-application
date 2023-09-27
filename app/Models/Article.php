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
        'submitted_at',
        'approved_at',
        'declined_at',
        'shared_at',
    ];


    public function nextArticle(): ?Article
    {
        return self::published()->where('id', '>', $this->id)->orderBy('id')->first();
    }

    public function previousArticle(): ?Article
    {
        return self::published()->where('id', '<', $this->id)->orderByDesc('id')->first();
    }

}
