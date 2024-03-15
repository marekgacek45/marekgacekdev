<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function projects()
{
    return $this->belongsToMany(Project::class,'project_category');
}
    public function posts()
{
    return $this->belongsToMany(Post::class,'post_category');
}
}
