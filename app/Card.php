<?php

namespace App;

use App\Models\Column;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title', 'slug', 'user_id', 'project_id', 'column_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function column(){
        return $this->belongsTo(Column::class);
    }
}
