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
                <h5 class="card-title"> Tambah Seksi Bidang</h5>
              </div>
              <div class="card-body">
              	<form action="{{route('store_sekbid')}}" method="post" enctype="multipart/form-data">
              		@csrf
   <div class="form-group">
    <label>Nomor Seksi Bidang</label>
    <input type="number" class="form-control @error('nomor') is-invalid @enderror"  placeholder="Seksi bidang ke berapa?" name="nomor" value="{{old('nomor')}}">
    @error('nomor')
     <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Nama Seksi Bidang</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Nama Seksi Bidang" name="name" value="{{old('name')}}"> 
    @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

   <div class="form-group">
    <label>Icon Seksi Bidang</label>
    <input type="text" class="form-control @error('icon') is-invalid @enderror"  placeholder="icon-hand-grab-o" name="icon" value="{{old('icon')}}"> 
    @error('icon')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Tentang Seksi Bidang :</label>
    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="my-editor" value="{!!old('content')!!}"></textarea>
     @error('content')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
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