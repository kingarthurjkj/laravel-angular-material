<?php
namespace App\Modal;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;


class Group extends Model
{
    protected $table = 'groups';

    public function users()
    {
        return $this->hasMany('App\Modal\User');
    }

    public function themes()
    {
        return $this->hasMany('App\Modal\Theme');
    }
}
