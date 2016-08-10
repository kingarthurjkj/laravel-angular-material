<?php
namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Theme extends Model
{
    protected $table = 'themes';

    public function groups()
    {
        return $this->belongsTo('App\Modal\Group');
    }

    public function activities()
    {
        return $this->belongsTo('App\Modal\Activity');
    }
    public function evaluates()
    {
        return $this->hasMany('App\Modal\Evaluate');
    }
}
