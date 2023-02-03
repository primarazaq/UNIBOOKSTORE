<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penerbit;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('pages.admin', [
            'listbuku' => $buku
        ]);
    }

    public function indexbuku()
    {
        $buku = Buku::all();
        $penerbit = Penerbit::all();
        return view('pages.buku', [
            'listbuku' => $buku,
            'listpenerbit' => $penerbit
        ]);
    }
    public function indexpenerbit()
    {
        $buku = Buku::all();
        return view('pages.admin', [
            'listbuku' => $buku
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $buku = $request->validate([
            'id_buku' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_penerbit' => 'required'
        ]);

        // $validatedData['created_at'] = User::save(['timestamps' => FALSE]);
        Buku::create($buku);

        return redirect('/admin/kelolabuku')->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $buku = $request->validate([
            'id_buku' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_penerbit' => 'required'
        ]);

        // $validatedData['created_at'] = User::save(['timestamps' => FALSE]);
        Buku::where('id_buku', $id)
            ->update($buku);

        return redirect('/admin/kelolabuku')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id_buku', $id)->delete();

        return redirect('/admin/kelolabuku')->with('success', 'Data berhasil dihapus!');
    }
}
