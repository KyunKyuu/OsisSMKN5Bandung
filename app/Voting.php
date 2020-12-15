<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    protected $table = 'pemiltos_voting';
    protected $guarded = ['id', 'created_at', 'updated_at'];

   	public function kandidat()
   	{
   		return $this->belongsTo(kandidat::class, 'kandidat_id');
   	}

}
