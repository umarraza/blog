<?php

namespace App\Models\Traits;
use App\Models\Project;

trait projectMethod {

    public function scopeActive() {
        return Project::where('title', 'Groves Algorithm');
    }

}
