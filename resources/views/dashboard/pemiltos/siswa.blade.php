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
                    
                      <th>Kelas</th>
                      <th>Status</th>
                      
                    </thead>
                    <tbody>
                  
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
                        <input type="file" name="import_file" class="form-control btn btn-primary" required>
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
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#dataTable').DataTable({
    paging: true,
    processing: true,
    serverside: true,
    ajax: '{{ route('ajax_get_data_siswa') }}',
    columns: [
      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'nis', name: 'nis' },
    
      { data: 'kelas', name: 'kelas' },
      { data: 'status', name: 'status' }
    ]
    });
} );
  </script>
@endpush