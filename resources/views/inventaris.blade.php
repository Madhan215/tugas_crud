@extends('layouts.main')

@section('container')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@auth
<a href="{{ route('inventaris.create') }}" class="btn btn-success">Tambah Data</a>

<div class="container mt-5">
    <h3>Daftar Inventaris</h3>
    <div class="d-flex flex-wrap">


            <?php foreach( $barang as $brg) : ?>
            
                <div class="p-2">
                    <div class="card margin-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $brg->string_img )}}" height="300px" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $brg->nama_barang ?></h5>
                        <p class="card-text"><?= $brg->kode_batang ?></p>
                        <a href="{{ route('inventaris.show', $brg->kode_batang) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('inventaris.edit', $brg->kode_batang) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('inventaris.destroy',$brg->kode_batang) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm_delete()">Hapus</button>
                        </form>
                        <script type="text/javascript">
                        function confirm_delete() {
                        return confirm('Anda yakin akan meenghapus data ini?');
                        }
                        </script>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>

@else
<div class="jumbotron">
  <h1 class="display-4">SEKRETARIAT Kita</h1>
  <p class="lead">Tempat data barang sekretariat kita.</p>
  <hr class="my-4">
  <p>Banjarmasin, Indonesia</p>
</div>
@endauth
</div>



@endsection
