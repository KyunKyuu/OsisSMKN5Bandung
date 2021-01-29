@extends('layouts/dashboard/main')

@section('content')
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
               
              <div class="card-header">
                <h4 class="card-title"> Table Siswa Sudah Memilih</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive"><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                      NIS
                      </th>
                    
                      <th>Kelas</th>
                      <th>Status</th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                     @foreach($users as  $user)
                     <tr>
                       <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->nis}}</td>
                      
                        <td>{{$user->kelas}}</td>
                        <td>{{$user->status}}</td>
                        <td>
                          <form action="{{route('destroy_user_memilih', $user->id)}}" method="post">
                        @csrf
                        @method('delete')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin dibatalkan?')">
                        Hapus Voting
                        </button>
                  </form>
                        </td>                     
                     </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer">
                {{$users->links()}}
              </div>
            </div>
          </div>
      </div>
  </div>



@endsection
