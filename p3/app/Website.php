<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public function users()
    {
    return $this->belongsToMany('App\User')
        ->withTimestamps() # Added to have Eloquent update the created_at/updated_at
        ->withPivot('my_review');
     }
}
