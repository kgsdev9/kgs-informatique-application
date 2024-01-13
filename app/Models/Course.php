<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable =  [
        'title',
        'slug',
        'image',
         'description',
         'tag_id',
         'typecourse_id'

    ];

    public function course() {
        return  $this->hasMany(Tag::class);
    }

    public function category() {
        return  $this->hasMany(TypeCourse::class);
    }
}
