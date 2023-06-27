<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  $buku = DB::table('tb_buku')->paginate(5);
  return view('blog/buku',['buku' => $buku]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        //Untuk mengambil data dari database berdasarkan id
        $buku = DB::table('tb_buku')->where('id',$id)->get();
        //Akses halaman edit dan mengirim data buku sesuai id
        return view('blog/edit_data',['buku' => $buku]);
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'nama' => 'required|max:35',
            'kategori' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'tahun' => 'required|min:4',
            'jumlah' => 'required|integer',
        ]);
    
        if ($validator->fails()) {
            throw new ValidationException($validator);
        } 
        return redirect('/buku');
    
        DB::table('tb_buku')->where('id',$request->id)->update([
           'nama_buku' => $request->nama,
           'kategori_buku' => $request->kategori,
           'penerbit_buku' => $request->penerbit,
           'tahun_buku' => $request->tahun,
           'jumlah_buku' => $request->jumlah
        ]);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
    public function tambah_buku(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'nama' => 'required|max:35',
            'kategori' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'tahun' => 'required|min:4',
            'jumlah' => 'required|integer',
        ]);
    
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

      DB::table('tb_buku')->insert([
        'nama_buku' => $request->nama,
        'kategori_buku' => $request->kategori,
        'penerbit_buku' => $request->penerbit,
        'tahun_buku' => $request->tahun,
        'jumlah_buku' => $request->jumlah
      ]);
      return redirect('buku');
    }
    public function delete(Request $request, $id)
{
    DB::table('tb_buku')->where('id', $id)->delete();

    $page = $request->input('page', 1); // Mendapatkan nilai page dari request

    return redirect('/buku?page=' . $page);
}


}