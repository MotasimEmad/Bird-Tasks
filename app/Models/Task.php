<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;
use App\Models\Activity;


class Task extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $touches = ['project'];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function recordActivity($type) {
        $this->activity()->create([
            'user_id' => ($this->project ?? $this)->user->id,
            "project_id" => $this->project->id,
            "description" => $type
        ]);
    }

    public function activity() {
        return $this->morphMany(Activity::class, 'subject')->latest();
    }
}
