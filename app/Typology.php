<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    protected $fillable = [

        'name',
        'desc',
    ];

    public function tasks() {
        return $this -> belongsToMany(Task::class);
    }

}
