<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nis', 'nisn', 'kelas', 'status', 'role',
    ];

   


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function voting()
    {
        return $this->hasOne(Voting::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   
}