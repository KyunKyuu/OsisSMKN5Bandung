<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $guarded = ['id','created_at', 'updated_at'];

    public function gambar_blog()
   {
        return !$this->gambar ? asset('no-thumbnail.jpg') :  asset("storage/" . $this->gambar);
   }
}
