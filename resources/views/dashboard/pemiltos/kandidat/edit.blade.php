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
                <h5 class="card-title"> Edit Kandidat Calon Ketua Osis</h5>
              </div>
              <div class="card-body">
              	<form action="{{route('update_kandidat', $kandidat->id)}}" method="post" enctype="multipart/form-data">
              		@csrf
                  @method('patch')
  <div class="form-group">
    <label>Nomer Urut Pasangan Calon</label>
    <input type="number" class="form-control"  placeholder="Nomer Urut Pasangan Calon" name="nomer_urut" value="{{$kandidat->nomer_urut}}">
  </div>
  <div class="form-group">
    <label>Nama Pasangan Calon</label>
    <input type="text" class="form-control"  placeholder="Nama Pasangan Calon" name="name" value="{{$kandidat->name}}">
  </div>
  <div class="form-group">
    <label>Kelas Pasangan Calon</label>
    <input type="text" class="form-control"  placeholder="Kelas Pasangan Calon" name="kelas" value="{{$kandidat->kelas}}">
  </div>
  <div class="form-group">
    <label for="gambar">Masukan Gambar</label>
    <div class="btn btn-primary">
    <input type="file" class="form-control-file" name="gambar" id="gambar" value="{{$kandidat->gambar}}">
    </div>
  </div>
  <div class="form-group">
    <label>Visi :</label>
    <textarea class="form-control" name="visi" id="my-editor-visi" value="{!!$kandidat->visi!!}">{!!$kandidat->visi!!}</textarea>
  </div>
  <div class="form-group">
    <label>Misi :</label>
    <textarea class="form-control"  name="misi" id="my-editor-misi" value="{!!$kandidat->misi!!}">{!!$kandidat->misi!!}</textarea>
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