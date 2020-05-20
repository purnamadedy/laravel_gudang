@extends('admin.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Upload Data</h1>


                <form method="post" action="{{ url('/file-upload-rename') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="nama_gambar">Nama Gambar</label>
                      <input type="text" class="form-control-file" id="nama_gambar" name="nama_gambar">
                        @error('nama_gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gambar_profile">Nama Gambar</label>
                        <input type="file" class="form-control-file" id="gambar_profile" name="gambar_profile">
                          @error('gambar_profile')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection

