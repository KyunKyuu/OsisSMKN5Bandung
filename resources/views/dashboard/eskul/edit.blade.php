@extends('layouts/dashboard/main')
@push('header')

<style>
  .ck-editor__editable {
    min-height: 350px;
    max-height: 350px;
}
</style>
@endpush
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Edit Eskul</h5>
              </div>
              <div class="card-body">
              	<form action="{{route('update_eskul', $eskul->id)}}" method="post" enctype="multipart/form-data">
              		@csrf
                  @method('patch')

  <div class="form-group">
    <label>Nama Eskul</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Nama eskul" name="name" value="{{$eskul->name}}"> 
    @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

<div class="form-group">
    <label>Masukan Gambar Icon</label>
    <div class="btn btn-success">
    <input type="file" class="form-control @error('gambar_icon') is-invalid @enderror" name="gambar_icon"  value="{{$eskul->gambar_icon}}">
    </div>
     @error('gambar_icon')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Masukan Gambar Logo</label>
    <div class="btn btn-primary">
    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"  value="{{$eskul->gambar}}">
    </div>
     @error('gambar')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Content :</label>
    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="my-editor" value="{!! $eskul->content !!}">{!! $eskul->content !!}</textarea>
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