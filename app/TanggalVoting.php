<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanggalVoting extends Model
{
    protected $table = 'pemiltos_tanggal_voting';
    protected $fillable = ['tanggal_mulai', 'tanggal_berakhir'];
    public $timestamps = false;

    protected $dates = ['tanggal_berakhir', 'tanggal_mulai'];

}
