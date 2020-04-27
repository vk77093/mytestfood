<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeDoc extends Model
{
    protected $uploads = '/resumeDocs/';
    protected $fillable = ['file'];

    public function getFileAttribute($resume_docs)
    {
        return $this->uploads . $resume_docs;
    }
}
