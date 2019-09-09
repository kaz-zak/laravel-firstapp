<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function getData()
    {
        if (!empty($this->person)) {
            return $this->id . ': ' . $this->title . ' (' . $this->person->name .')';
        } else {
            return $this->id . ': ' . $this->title . ' (not found)';
        }
    }
}
