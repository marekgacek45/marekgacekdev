<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function projects()
{
    return $this->belongsToMany(Project::class);
}
}
