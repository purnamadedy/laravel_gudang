@extends('admin.layout.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Barang</h1>


                <form method="post" action="/gudang">
                    @csrf

                    <div class="form-group">
                      <label for="no invoice">No Invoice</label>
                      <input type="text" class="form-control @error('no_invoice') is-invalid @enderror" id="no_invoice" placeholder="Masukan No Invoice" name="no_invoice">
                        @error('no_invoice')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama barang">Nama Barang</label>
                        <input type="text" class="form-control @error('nama_brang') is-invalid @enderror" id="nama_brang" placeholder="Masukan Nama Barang" name="nama_brang">
                        @error('nama_brang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis barang">Jenis Barang</label>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenis_barang" name="jenis_barang" value="Elektronik">
                            <label class="form-check-label" for="elektronik">Elektronik</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenis_barang" name="jenis_barang" value="Fashion">
                            <label class="form-check-label" for="fasion">Fashion</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenis_barang" name="jenis_barang" value="Makanan">
                            <label class="form-check-label" for="makanan">Makanan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat barang">Alamat Barang</label>
                        <input type="text" class="form-control @error('alamat_barang') is-invalid @enderror" id="alamat_barang" placeholder="Masukan Alamat Barang" name="alamat_barang">
                        @error('alamat_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi barang">Deskripsi Barang</label>
                        <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" id="deskripsi_barang" placeholder="Masukan Deskripsi Barang" name="deskripsi_barang" rows="3"></textarea>
                        @error('deskripsi_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Data Barang</button>
                </form>
            </div>
        </div>
    </div>
@endsection

