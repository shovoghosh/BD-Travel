<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageAdmin extends Model
{
    protected $table="messagefromadmin";
    protected $primaryKey="id";
    public $timestamps=false;
}
