<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table="hotel";
    protected $primaryKey="id";
    public $timestamps=false;
}
