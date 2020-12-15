<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
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
            'name'     => $row[0],
            'nis'    => $row[1],
            'nisn' => $row[2],
            'kelas' => $row[3],
            'status' => 'belum memilih',
            'role' => 'siswa',
        ]);
    }
}