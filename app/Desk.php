<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    protected $fillable = ['name'];
    public function lists()
    {
        return $this->hasMany(DeskList::class);
    }
}
