<?php

namespace App\Models;

use App\Traits\UuidModelTrait;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use UuidModelTrait;

    public static $equipments = ['Computers', 'Projector', 'Blackboard'];

    protected $with = ['building'];

    protected $fillable = [
        'name', 'building_id', 'equipments',
    ];

    protected $casts = [
        'name'       => 'string',
        'equipments' => 'array',
    ];

    public function building()
    {
        return $this->belongsTo('App\Models\Building');
    }
}
