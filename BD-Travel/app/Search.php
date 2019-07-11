<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table="search";
    protected $primaryKey="id";
    public $timestamps=false;
}
