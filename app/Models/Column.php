<?php

namespace App\Models;

use App\Card;
use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = ['title'];

    public function card()
    {
        return $this->hasOne(Card::class);
    }
}
