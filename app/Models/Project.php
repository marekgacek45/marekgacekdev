<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tools()
    {
        return $this->belongsToMany(Tool::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'project_category');
    }
}
