<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    
    public function index()
    {
        $datas['barang'] = DB::select('SELECT * FROM inventaris');
        $datas['active'] = 'home';
        return view('inventaris', $datas);
    }

    public function show(string $id)
    {
        $data['barang'] = DB::table('inventaris')->where('kode_batang', $id)->first();
        return view('detailBarang', $data);
    }

     public function create()
    {
        return view('tambahInventaris');
    }

    public function store(Request $request)
    {
        //return $request->file('image')->store('images\products');

        $kodeInput = $request->input('kodeInput');
        $namaInput = $request->input('namaInput');
        $jumlahInput = $request->input('jumlahInput');
        $statusInput = $request->input('statusInput');
        $prodiInput = $request->input('prodiInput');
        $tahunInput = $request->input('tahunInput');

        

        
        if($request->hasFile('image'))
        {
            $validatData['image'] = $request->file('image')->store('images/products');
            // $destination_path = 'public/images/products';
            // $image = $request->file('image');
            // $image_name = $image->getClientOriginalName();
            // // var_dump($image_name);
            // // exit;
            // $path = $request->file['image']->storeAs($destination_path, $image_name);

            // $input['image'] = $image_name;

        }

        $query = DB::table('inventaris')->insert([
            'kode_batang' => $kodeInput,
            'nama_barang' => $namaInput,
            'jumlah' => $jumlahInput,
            'status' => $statusInput,
            'tahun' => $tahunInput,
            'string_img' => $validatData['image'],
        ]);

        if ($query) {
            return redirect()->route('inventaris')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('inventaris')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function destroy(string $id)
    {
        $query = DB::table('inventaris')->where('kode_batang', $id)->delete();

        if ($query) {
            return redirect()->route('inventaris')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('inventaris')->with('failed', 'Data Gagal Dihapus');
        }
    }

    public function edit(string $id)
    {
        $data['barang'] = DB::table('inventaris')->where('kode_batang', $id)->first();

        return view('editInventaris', $data);
    }

     public function update(Request $request, string $id)
    {
        $kodeInput = $request->input('kodeInput');
        $namaInput = $request->input('namaInput');
        $jumlahInput = $request->input('jumlahInput');
        $statusInput = $request->input('statusInput');
        $tahunInput = $request->input('tahunInput');

        $query = DB::table('inventaris')->where('kode_batang', $id)->update([
            'kode_batang' => $kodeInput,
            'nama_barang' => $namaInput,
            'jumlah' => $jumlahInput,
            'status' => $statusInput,
            'tahun' => $tahunInput,
        ]);

        if ($query) {
            return redirect()->route('inventaris')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('inventaris')->with('failed', 'Data Gagal Diupdate');
        }
    }

}



