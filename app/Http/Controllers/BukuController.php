<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index(){
        $buku=DB::table('buku')->get();
        return view('buku.index',['buku'=>$buku]);

    }

    public function tambah(){
        $buku=DB::table('buku')->get();
        return view('buku.tambah',['buku'=>$buku]);

    }

    public function simpan(Request $request){
        $buku=DB::table('buku')->insert([
            'penulis'=>$request->penulis,
            'judul'=>$request->judul,
            'kota'=>$request->kota,
            'penerbit'=>$request->penerbit,
            'tahun'=>$request->tahun,
        ]);
        return redirect('/buku');
    }

    public function edit($id){
        $buku=DB::table('buku')->where('id',$id)->get();
        return view('buku.edit',['buku'=>$buku]);

    }

    public function update(Request $request){
        $buku=DB::table('buku')->where('id',$request->id)->update([
            'penulis'=>$request->penulis,
            'judul'=>$request->judul,
            'kota'=>$request->kota,
            'penerbit'=>$request->penerbit,
            'tahun'=>$request->tahun,
        ]);
        return redirect('/buku');
    }

    public function hapus($id){
        $buku=DB::table('buku')->where('id',$id)->delete();
        return redirect('/buku');

    }
}




