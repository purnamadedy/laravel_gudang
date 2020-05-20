@extends('admin.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Upload Data</h1>


                <form method="post" action="{{ url('/file-upload') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="berkas">Gambar Profile</label>
                      <input type="file" class="form-control-file" id="berekas" name="berkas">
                        @error('berkas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection

