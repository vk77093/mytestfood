<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YourBrand extends Model
{
    protected $guarded=['id'];
    public function label(){
        return $this->belongsTo('App\LabelType', 'label_id');
    }
    // public function country(){
    //     return $this->belongsTo('App\')
    // }
}

