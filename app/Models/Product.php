<?php

namespace App\Models;

use Encore\Admin\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Resizable;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function thumb() {
        return $this->thumbnail('small','pic');
    }
}
