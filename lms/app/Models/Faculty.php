<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use Uuids;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function programs()
    {
        return $this->hasMany('App\Models\Program');
    }
}
