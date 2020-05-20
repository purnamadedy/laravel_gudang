@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Data Barang Gudang</h1>

                <a href="/gudang/create" class="btn btn-primary my-3">Tambah Data Barang</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    {{-- <th scope="col">Id</th> --}}
                    <th scope="col">No Invoice</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Alamat Barang</th>
                    <th scope="col">Deskrpsi Barang</th>
                    {{-- <th scope="col">Created_at</th> --}}
                    <th scope="col">Menu</th>
                  </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach($gudang as $tampil)
                            <tr>
                                {{-- <td>{{$tampil->id}}</td> --}}
                                <td>{{$tampil->no_invoice}}</td>
                                <td>{{$tampil->nama_brang}}</td>
                                <td>{{$tampil->jenis_barang}}</td>
                                <td>{{$tampil->alamat_barang}}</td>
                                <td>{{$tampil->deskripsi_barang}}</td>
                                {{-- <td>{{$tampil->created_at}}</td> --}}
                                <td>
                                    <a href="/gudang/{{ $tampil->id }}" class="badge badge-success">Lihat</a>
                                    {{-- <a href="" class="badge badge-info">Edit</a> --}}
                                    {{-- <a href="" class="badge-danger">Delete</a> --}}
                                    <form action="{{ route ('gudang.destroy', $tampil->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
