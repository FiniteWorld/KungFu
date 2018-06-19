<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected  $table = 'students'; //Table name can be different also
    public $primaryKey = 'id'; //setting primary key

    public $timestamps = 'true'; //setting timestamps to true by default also true;
}
