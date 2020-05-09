<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabelType extends Model
{
    protected $guarded=['id'];
    protected $uploads='/labelDocs/';

    public function getLabelfileAttribute($values){
        return $this->uploads . $values;

    }
}
