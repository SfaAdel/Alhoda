<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

/**
     * The properties that belong to the tag.
     */
    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }

    /**
     * The blogs that belong to the tag.
     */
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
