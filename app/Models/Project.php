<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\projectMethod;

class Project extends Model
{

    use projectMethod;

    const PAGE_SIZE = 5;

    protected $table = "projects";

    protected $fillable = [
        'title',
        'description',
    ];

}
