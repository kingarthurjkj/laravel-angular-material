<?php
namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Evaluate extends Model
{
    protected $table = 'evaluates';

    public function users()
    {
        return $this->belongsTo('App\Modal\User');
    }
    public function themes()
    {
        return $this->belongsTo('App\Modal\Theme');
    }

    public function questions()
    {
        return $this->belongsTo('App\Modal\Question');
    }
}
