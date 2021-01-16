<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactForm extends Model
{
     use SoftDeletes;

    protected $fillable = ['name', 'email', 'phone', 'comments', 'viewed'];
    protected $hidden = [];
    
    public static function boot()
    {
        parent::boot();
        ContactForm::observe(new \App\Observers\ContactFormObserver);
    }

    public function setViewedAttribute($input)
    {
        $this->attributes['viewed'] = $input ? $input : null;
    }
}
