@extends('layouts.main')

@section('container')
<a href="{{ route('inventaris.index') }}" class="btn btn-success mb-5">Kembali</a>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{ asset('storage/' . $barang->string_img )}}" onclick=({}) alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $barang->nama_barang ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Kode Batang : <?= $barang->kode_batang ?></li>
    <li class="list-group-item">Jumlah : <?= $barang->jumlah ?></li>
    <li class="list-group-item">Status : <?= $barang->status ?></li>
  </ul>
</div>

@endsection