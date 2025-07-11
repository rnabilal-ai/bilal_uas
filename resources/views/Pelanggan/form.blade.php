
@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/pelanggan" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Dosen Pembimbing</label>
                            <select name="dosen" id="" class="form-control">
                                <option value="">-Pilih Dosen Pembimbing-</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jk" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
