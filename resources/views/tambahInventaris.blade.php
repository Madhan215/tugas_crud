@extends('layouts.main')

@section('container')
<h3 class="text-center">Tambah Data Inventaris</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('inventaris.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
            
                    <div class="mb-3">
                        <label for="kode_input" class="form-label">Kode</label>
                        <input type="text" class="form-control" name="kodeInput" id="kode_input">
                    </div>
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_input" name="namaInput">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_input" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah_input" name="jumlahInput">
                    </div>
                    <div class="mb-3">
                        <label for="status_input" class="form-label">Status</label>
                        <input type="text" class="form-control" id="status_input" name="statusInput">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_input" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun_input" name="tahunInput">
                    </div>
                    <div class="mb-3">
                        <label for="image">Pilih gambar</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
