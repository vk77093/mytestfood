<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobFormIn extends Model
{
    protected $guarded=['id'];

    public function fileresume()
    {
        return $this->belongsTo('App\ResumeDoc', 'resume_doc_id');
    }

}
