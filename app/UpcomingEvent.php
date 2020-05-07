<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingEvent extends Model
{
    protected $guarded = ['id'];

    public function fileEvent(){
        return $this->belongsTo('App\EventDoc', 'event_doc_id');
    }
    public function eventType(){
        return $this->belongsTo('App\EventType', 'event_type_id');
    }
}
