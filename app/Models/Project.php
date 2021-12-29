<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Task;
use App\Models\Activity;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $old = [];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }


    public function tasks() 
    {
        return $this->hasMany(Task::Class);
    }


    public function activity() 
    {
        return $this->hasMany(Activity::Class)->latest();
    }


    public function recordActivity($description) 
    {
        $this->activity()->create([
            'user_id' => ($this->project ?? $this)->user->id,
            'description' => $description,
            'changes' => $description === 'updated' ? [
                'before' => array_diff($this->old, $this->getAttributes()),
                'after' => $this->getChanges()
            ] : null
        ]);
    }


    public function invite(User $user)
    {
        return $this->members()->attach($user);
    }


    public function members() 
    {
        return $this->belongsToMany(User::class, 'project_members');
    }


}
