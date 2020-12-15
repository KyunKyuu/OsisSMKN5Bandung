@extends('layouts/dashboard/main')

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"> Edit Seksi Bidang</h5>
              </div>
              <div class="card-body">
              	<form action="{{route('update_sekbid', $sekbid->id)}}" method="post" enctype="multipart/form-data">
              		@csrf
                  @method('patch')
  <div class="form-group">
    <label>Nomer Seksi Bidang</label>
    <input type="number" class="form-control"  placeholder="Nomer Sekbid" name="nomor" value="{{$sekbid->nomor}}">
  </div>
  <div class="form-group">
    <label>Nama Seksi Bidang</label>
    <input type="text" class="form-control"  placeholder="Nama Sekbid" name="name" value="{{$sekbid->name}}">
  </div>
  
  <div class="form-group">
    <label>Icon Seksi Bidang</label>
    <input type="text" class="form-control @error('icon') is-invalid @enderror"  placeholder="icon-hand-grab-o" name="icon" value="{{$sekbid->icon}}">
    @error('icon')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Tentang Seksi Bidang :</label>
    <textarea name="content" class="form-control" id="my-editor" value="{!!$sekbid->content!!}">{!!$sekbid->content!!}</textarea>
    
  </div>

  <button type="submit" class="btn btn-danger">Submit</button>
</form>

           </div>
          </div>
    	 </div>
        </div>
      </div>
@endsection

@push('footer')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
  <script>
  CKEDITOR.replace('my-editor', options);
  </script>
@endpush