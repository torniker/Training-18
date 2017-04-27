<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;

class ProgramCourse extends Model
{
    use Uuids;

    protected $fillable = [
        'course_id', 'program_id', 'type',
    ];

    public function program()
    {
        return $this->belongsTo('App\Models\Program');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
