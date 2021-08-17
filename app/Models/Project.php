<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'thumbnail', 'description', 'github_link', 'youtube_link', 'skills', 'category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }



}
