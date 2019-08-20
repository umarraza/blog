<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Method;

class Project extends Model
{
    use Method;

    const PAGE_SIZE = 5;

    protected $table = "projects";

    protected $fillable = ['title','description'];

    public function tasks() {
        return $this->hasMany(Task::class);
    }

}
