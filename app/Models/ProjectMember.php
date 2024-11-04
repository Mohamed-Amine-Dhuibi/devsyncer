<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'function',
        'task_description',
        'user_id'
    ];

    /**
     * Get the project that the member belongs to.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    /**
     * Get the user this member belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
