<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'name', 
        'legend', 
        'image_desktop', 
        'image_mobile', 
        'link', 
        'order', 
        'published'
    ];

    public function setOrderAttribute($input)
    {
        $this->attributes['order'] = $input ? $input : null;
    }

    public function setPublishedAttribute($input)
    {
        $this->attributes['published'] = $input ? $input : null;
    }
    
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
    
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

}
