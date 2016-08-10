<?php
namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Activity extends Model
{
    protected $table = 'activities';

    public function themes()
    {
        return $this->hasMany('App\Modal\Theme');
    }

    public function questions()
    {
        return $this->hasMany('App\Modal\Question');
    }
}
