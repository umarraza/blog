<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";

    protected $fillable = ['project_id','description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
