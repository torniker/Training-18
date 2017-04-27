<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use Uuids;

    protected $fillable = [
        'name', 'faculty_id', 'mandatorty_credits', 'optional_credits',
    ];

    protected $casts = [
        'name'               => 'string',
        'mandatorty_credits' => 'integer',
        'optional_credits'   => 'integer',
    ];

    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }

    public function programCourses()
    {
        return $this->hasMany('App\Models\ProgramCourse');
    }
}
