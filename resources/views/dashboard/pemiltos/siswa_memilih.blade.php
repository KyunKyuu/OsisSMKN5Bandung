@extends('layouts/dashboard/main')
@push('header')
  <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> 
@endpush
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
                      <th>NISN</th>
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
                        <td>{{$user->nisn}}</td>
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
                
              </div>
            </div>
          </div>
      </div>
  </div>



@endsection
@push('footer')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#dataTable').DataTable({
    paging: true,
    processing: true,
    serverside: true,
    ajax: '{{ route('ajax_get_data_siswa_sudah_memilih') }}',
    columns: [
      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'nis', name: 'nis' },
      { data: 'nisn', name: 'nisn' },
      { data: 'kelas', name: 'kelas' },
      { data: 'status', name: 'status' }
    ]
    });
} );
  </script>
@endpush