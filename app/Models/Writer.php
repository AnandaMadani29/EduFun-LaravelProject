<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $fillable = ['name', 'specialist', 'image'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
