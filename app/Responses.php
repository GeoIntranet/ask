<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{
    public $fillable =['user_id','question','response'];
}
