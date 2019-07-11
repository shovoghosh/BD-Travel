<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table="place";
    protected $primaryKey="id";
    public $timestamps=false;
}
