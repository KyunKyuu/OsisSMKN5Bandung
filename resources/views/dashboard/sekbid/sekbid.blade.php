@extends('layouts/dashboard/main')

@push('header')

<style>
  .ck-editor__editable {
    min-height: 250px;
    max-height: 250px;
}
</style>
@endpush
@section('content')
 <div class="content">
        <div class="row">
          <div class="col-md-12">

          
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tabel Seksi Bidang</h4>
                <a href="{{route('create_sekbid')}}" class="btn btn-danger" style="color: white;"><i class="nc-icon nc-simple-add">&nbsp;Tambah Data Sekbid</i></a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Sekbid
                      </th>
                      <th>
                        Action
                      </th>
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                      @foreach($sekbids as $sekbid)
                      <tr>
                        <td>
                          {{$loop->iteration}}
                        </td>

                        <td>
                         Sekbid {{$sekbid->nomor}}
                        </td>

                        <td>
                          <a href="{{route('show_sekbid', $sekbid->id)}}" class="btn btn-primary" style="color: white;">Detail</a>

                          <a href="{{route('edit_sekbid', $sekbid->id)}}" class="btn btn-success" style="color: white;">Edit</a>
                        </td>

                        <td>
                        <form action="{{route('destroy_sekbid', $sekbid->id)}}" method="post">
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
                {{$sekbids->links()}}
              </div>
            </div>
          </div>
      </div>
  </div>

@endsection