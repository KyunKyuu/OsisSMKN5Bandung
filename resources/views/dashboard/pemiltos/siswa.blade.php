@extends('layouts/dashboard/main')
@push('header')
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
@endpush
@section('content')
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
               @if ($message = Session::get('success'))
            <div class="alert alert-success alert-with-icon alert-dismissible fade show" data-notify="container">
               <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
             <i class="nc-icon nc-simple-remove"></i>
               </button>
             <span data-notify="icon" class="nc-icon nc-bell-55"></span>
              <span data-notify="message">{{$message}}</span>
              </div>
            @endif
              <div class="card-header">
                <h4 class="card-title"> Table Siswa</h4>
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                IMPORT DATA
              </button>
 
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
                          <form action="{{route('destroy_user', $user->id)}}" method="post">
                        @csrf
                        @method('delete')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin Dihapus?')">
                        Hapus
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


<!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('siswa.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control btn btn-primary" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('footer')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready( function () {
    $('#dataTable').DataTable();
} );
  </script>
@endpush