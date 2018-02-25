<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'birthdate', 'address'];

    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
