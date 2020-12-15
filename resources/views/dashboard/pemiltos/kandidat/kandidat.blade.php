@extends('layouts/dashboard/main')

@section('content')
 <div class="content">
        <div class="row">
          <div class="col-md-12">

          
            <div class="card">
              
              <div class="card-header">
                <h4 class="card-title"> Tabel Kandidat Calon Ketua Osis</h4>
                <a href="{{route('create_kandidat')}}" class="btn btn-danger" style="color: white;"><i class="nc-icon nc-simple-add">&nbsp;Tambah Data Kandidat</i></a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nomer Urut
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Kelas
                      </th>
                      <th>
                        Gambar
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach($kandidats as $kandidat)
                      <tr>
                        <td>
                          {{$kandidat->nomer_urut}}
                        </td>

                        <td>
                          {{$kandidat->name}}
                        </td>
                        <td>
                          {{$kandidat->kelas}}
                        </td>

                        <td>
                          <img src="{{$kandidat->gambar_kandidat()}}" width="40">
                        </td>
                        <td class="text-right">
                          <a href="{{route('show_kandidat', $kandidat->id)}}" class="btn btn-danger" style="color: white;">Detail</a>

                    </a> 
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>

@endsection