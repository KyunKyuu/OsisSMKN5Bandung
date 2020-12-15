<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskul';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function gambar()
   {
        return !$this->gambar ? asset('no-thumbnail.jpg') :  asset("storage/" . $this->gambar);
   }

   public function gambar_icon()
   {
        return !$this->gambar_icon ? asset('no-thumbnail.jpg') :  asset("storage/" . $this->gambar_icon);
   }
}
