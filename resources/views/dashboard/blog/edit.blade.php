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
                <h5 class="card-title">Edit Blog</h5>
              </div>
              <div class="card-body">
              	<form action="{{route('update_blog', $blog->id)}}" method="post" enctype="multipart/form-data">
              		@csrf
                  @method('patch')

  <div class="form-group">
    <label>Judul Blog</label>
    <input type="text" class="form-control @error('judul') is-invalid @enderror"  placeholder="Judul Blog" name="judul" value="{{$blog->judul}}"> 
    @error('judul')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Category Blog</label>
    <select  class="form-control @error('category') is-invalid @enderror" name="category">
    <option selected="" value="{{$blog->category}}">{{$blog->category}}</option>
    <option value="Kegiatan OSIS">Kegiatan OSIS</option>
    <option value="Kegiatan Eskul">Kegiatan Eskul</option>
    <option value="Informasi Sekolah">Informasi Sekolah</option>
    </select>
     @error('category')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Masukan Gambar</label>
    <div class="btn btn-primary">
    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"  value="{{$blog->gambar}}">
    </div>
     @error('gambar')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Content :</label>
    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" id="my-editor" value="{!! $blog->isi !!}">{!! $blog->isi !!}</textarea>
     @error('isi')
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