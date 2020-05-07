<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventDoc extends Model
{
    protected $uploads='/mktDocs/';
    protected $fillable = ['file'];

    public function getFileAttribute($event_docs){
     return $this->uploads . $event_docs;
    }
}
