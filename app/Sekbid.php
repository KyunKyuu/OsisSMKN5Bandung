<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekbid extends Model
{
    protected $table = 'Sekbid';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
