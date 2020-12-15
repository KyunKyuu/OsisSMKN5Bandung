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
                <h5 class="card-title"> Tambah Kandidat Calon Ketua Osis</h5>
              </div>
              <div class="card-body">
              	<form action="{{route('store_kandidat')}}" method="post" enctype="multipart/form-data">
              		@csrf
  <div class="form-group">
    <label>Nomer Urut Pasangan Calon</label>
    <input type="number" class="form-control @error('nomer_urut') is-invalid @enderror"  placeholder="Nomer Urut Pasangan Calon" name="nomer_urut" value="{{old('nomer_urut')}}">
    @error('nomer_urut')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Nama Pasangan Calon</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Nama Pasangan Calon" name="name" value="{{old('name')}}"> 
    @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Kelas Pasangan Calon</label>
    <input type="text" class="form-control @error('kelas') is-invalid @enderror"  placeholder="Kelas Pasangan Calon" name="kelas" value="{{old('kelas')}}">
     @error('kelas')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Masukan Gambar</label>
    <div class="btn btn-primary">
    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"  value="{{old('gambar')}}">
    </div>
     @error('gambar')
      <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Visi :</label>
    <textarea name="visi" class="form-control @error('visi') is-invalid @enderror" id="my-editor-visi" value="{!!old('visi')!!}"></textarea>
     @error('visi')
              <div class="invalid-feedback">{{ $message }}</div>
     @enderror
  </div>

  <div class="form-group">
    <label>Misi :</label>
  <textarea name="misi" class="form-control @error('misi') is-invalid @enderror" id="my-editor-misi" value="{!!old('misi')!!}"></textarea>
     @error('misi')
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
  CKEDITOR.replace('my-editor-visi', options);
  CKEDITOR.replace('my-editor-misi', options);
  </script>
@endpush