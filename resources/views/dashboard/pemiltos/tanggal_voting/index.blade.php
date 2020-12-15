@extends('layouts/dashboard/main')

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
                <h4 class="card-title"> Tabel Waktu PEMILTOS</h4>
                @if($waktu_voting->isEmpty())
                <button type="button" class="btn btn-danger" style="color: white;" data-toggle="modal" data-target="#exampleModal"><i class="nc-icon nc-simple-add">&nbsp; Tambah Waktu</i></button>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Waktu Mulai
                      </th>
                      <th>
                        Waktu Berakhir
                      </th>
                      
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                     @foreach($waktu_voting as $waktu)
                      <tr>
                        <td>
                          {{$loop->iteration}}
                        </td>

                        <td>
                          {{$waktu->tanggal_mulai}}
                        </td>
                        <td>
                          {{$waktu->tanggal_berakhir}}
                        </td>
                        <td class="text-right">
                        <form action="{{route('destroy_tanggal', $waktu->id)}}" method="post">
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
            </div>
          </div>
      </div>
  </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Waktu Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('store_tanggal')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Mulai:</label>
            <input type="date" class="form-control" name="tanggal_mulai" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name2" class="col-form-label">Jam Mulai:</label>
            <input type="time" class="form-control" name="jam_mulai" id="recipient-name2">
          </div>
         <div class="form-group">
            <label for="recipient-name3" class="col-form-label">Tanggal Berakhir:</label>
            <input type="date" class="form-control" name="tanggal_berakhir" id="recipient-name3">
          </div>
         <div class="form-group">
            <label for="recipient-name4" class="col-form-label">Jam Berakhir:</label>
            <input type="time" class="form-control" name="jam_berakhir" id="recipient-name4">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
       </form>
    </div>
  </div>
</div>
@endsection