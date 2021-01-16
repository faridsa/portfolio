<?php

namespace App\Observers;

use Illuminate\Support\Str;

class SetSlugObserver
{
    public function saving($model)
    {
        $column_names = \Schema::getColumnListing($model->getTable());

        if (in_array('slug', $column_names)) {
            if (in_array('name', $column_names)) {
                $model->slug = Str::slug($model->name);
            }
            if (in_array('title', $column_names)) {
                $model->slug = Str::slug($model->title);
            }
        }
    }
}