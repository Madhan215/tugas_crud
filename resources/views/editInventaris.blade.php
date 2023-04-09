@extends('layouts.main')

@section('container')
<h3 class="text-center">Edit Data inventaris</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('inventaris.update', $barang->kode_batang) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                            <label for="kode_input" class="form-label">Kode Batang</label>
                            <input type="text" class="form-control" name="kodeInput" id="kode_input" value="{{ $barang->kode_batang }}">
                    </div>
                    <div class="mb-3">
                            <label for="nama_input" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_input" name="namaInput" value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="mb-3">
                            <label for="jumlah_input" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah_input" name="jumlahInput" value="{{ $barang->jumlah }}">
                    </div>
                    <div class="mb-3">
                            <label for="status_input" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status_input" name="statusInput" value="{{ $barang->status }}">
                    </div>
                    <div class="mb-3">
                            <label for="tahun_input" class="form-label">Tahun</label>
                            <input type="text" class="form-control" id="tahun_input" name="tahunInput" value="{{ $barang->tahun }}">
                    </div>
                                    
                    <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
