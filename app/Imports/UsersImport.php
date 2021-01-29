<?php

namespace App\Imports;

use App\User;

use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    

    public function model(array $row)
    {
      
        return new User([
            'nis'  => @$row[0],
            'name' => @$row[1],
            'kelas' => @$row[2],
            'status' => 'belum memilih',
            'role' => 'siswa'
        ]);
    }
}