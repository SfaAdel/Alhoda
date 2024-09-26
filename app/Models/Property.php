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

    protected $fillable = [
        'name',
        'property_type',
        'finishing_type',
        'facade_finishing',
        'images',
        'video',
        'banner',
        'phone',
        'city',
        'area',
        'sector',
        'short_description',
        'long_description',
        'active',
        'garden',
        'price',
        'garden_space',
        'number_of_floors',
        'property_space',

    ];


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    protected $casts = [
        'images' => 'array',
    ];
}
