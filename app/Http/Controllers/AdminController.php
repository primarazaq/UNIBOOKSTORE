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
        $penerbit = Penerbit::all();
        return view('pages.admin', [
            'listbuku' => $buku,
            'listpenerbit' => $penerbit
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
        $penerbit = Penerbit::all();
        return view('pages.penerbit', [
            'listbuku' => $buku,
            'listpenerbit' => $penerbit
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
        if ($request->id_buku) {
            $buku = $request->validate([
                'id_buku' => 'required',
                'kategori' => 'required',
                'nama_buku' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'id_penerbit' => 'required'
            ]);
            Buku::create($buku);

            return redirect('/admin')->with('success', 'Data berhasil dibuat!');
        } else {
            $penerbit = $request->validate([
                'id_penerbit' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'telepon' => 'required'
            ]);

            // $validatedData['created_at'] = User::save(['timestamps' => FALSE]);
            Penerbit::create($penerbit);

            return redirect('/admin')->with('success', 'Data berhasil dibuat!');
        }
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

        if ($request->id_buku) {
            $buku = $request->validate([
                'id_buku' => 'required',
                'kategori' => 'required',
                'nama_buku' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'id_penerbit' => 'required'
            ]);

            Buku::where('id_buku', $id)
                ->update($buku);

            return redirect('/admin')->with('success', 'Data berhasil diubah!');
        } else {
            $penerbit = $request->validate([
                'id_penerbit' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'telepon' => 'required'
            ]);

            Penerbit::where('id_penerbit', $id)
                ->update($penerbit);

            return redirect('/admin')->with('success', 'Data berhasil diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->id_buku) {
            Buku::where('id_buku', $id)->delete();
            return redirect('/admin')->with('success', 'Data berhasil dihapus!');
        } else {
            $relasi = Buku::where('id_penerbit', $id)->get();
            if (count($relasi) > 0) {
                return redirect('/admin')->with('failed', 'Data gagal dihapus! data ini memiliki relasi dengan data lain!');
            } else {
                Penerbit::where('id_penerbit', $id)->delete();
                return redirect('/admin')->with('success', 'Data berhasil dihapus!');
            }
        }
    }
}
