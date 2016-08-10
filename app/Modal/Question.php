<?php
namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Question extends Model
{
    protected $table = 'questions';

    public function activities()
    {
        return $this->belongsTo('App\Modal\Activity');
    }

    public function evaluates()
    {
        return $this->hasMany('App\Modal\Evaluate');
    }
}
