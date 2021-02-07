<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    const ABOUT_WIDTH  = 540;
    const ABOUT_HEIGHT = 328;

    protected $fillable = [
        'title',
        'subtitle',
        'desc',
    ];

    public function images(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
