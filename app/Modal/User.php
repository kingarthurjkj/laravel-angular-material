<?php
namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class User extends Model
{
    protected $table = 'users';

    public function groups()
    {
        return $this->belongsTo('App\Modal\Group');
    }

    public function evaluates()
    {
        return $this->hasMany('App\Modal\Evaluate');
    }
}
