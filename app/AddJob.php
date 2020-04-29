<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddJob extends Model
{
    protected $guarded=['id'];

    public function position(){
        return $this->belongsTo('App\Position');
    }

}
