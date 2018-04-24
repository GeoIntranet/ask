<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    public $fillable = ['id_tech','last_act','titre','explic'];
    protected $table = 'it_it';
}
