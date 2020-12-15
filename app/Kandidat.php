<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $table = 'pemiltos_kandidat';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function voting()
    {
    	return $this->hasMany(Voting::class);
    }

    public function gambar_kandidat()
   {
        return !$this->gambar ? asset('no-profile.jpg') : asset("storage/" . $this->gambar);
   }
}
