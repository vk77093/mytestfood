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
    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }
    public function stateData()
    {
        return $this->belongsTo('App\State', 'state');
    }
    public function cityData(){
        return $this->belongsTo('App\City','city');
    }
}

