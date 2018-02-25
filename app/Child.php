<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'children';
    protected $primaryKey = 'id';
    protected $fillable = ['person_id', 'name', 'birthdate'];

    public function people()
    {
        return $this->belongsTo(Person::class);
    }
}
