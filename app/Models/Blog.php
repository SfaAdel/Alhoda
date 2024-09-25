<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'short_description',
        'second_title',
        'long_description',
        'icon',
        'banner',
    ];
 /**
     * The tags that belong to the blog.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
