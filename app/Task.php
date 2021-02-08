<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

        'title',
        'desc',
        'priority',

    ];

    public function employee() {

        return $this -> belongsTo(Employee::class);
    }

    public function locations() {
        return $this -> belongsToMany(Location::class);
    }

    public function typologies() {
        return $this -> belongsToMany(Typology::class);
    }

    //riguardare ma pf locations per me non sta avendo ne effetto ne senso qua dentro




}
