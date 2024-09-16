<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

 /**
     * The tags that belong to the property.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
