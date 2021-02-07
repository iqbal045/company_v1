<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_title',
        'about_desc',
        'service_title',
        'service_desc',
        'portfolio_title',
        'portfolio_desc',
        'team_title',
        'team_desc',
        'feedback_title',
        'feedback_desc',
        'blog_title',
        'blog_desc',
        'feature_title',
        'feature_desc',
        'contact_title',
        'contact_desc',
    ];
}
