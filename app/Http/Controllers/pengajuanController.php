<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\lisensiModel;

class pengajuanController extends Controller
{
    
    public function index(Request $request){

        $lisensi = DB::table('tblisensi')->get();

        return view('backend.lisensi.all-lisensi', compact('lisensi'));

    }

    public function tambah(){
        return view('backend.lisensi.add_lisensi');
    }

    public function simpan(Request $request)
    {
        // Mendapatkan kdtoko terakhir dari database
        $lastKdtoko = lisensiModel::orderBy('id', 'desc')->value('kdtoko');

        // Memecah kdtoko terakhir untuk mendapatkan nomor
        $lastNumber = (int) substr($lastKdtoko, strlen('TOKO-'));

        // Membuat kdtoko baru dengan menambahkan 1 pada nomor sebelumnya
        $newKdtoko = 'TOKO-' . ($lastNumber + 1);

        $simpan = lisensiModel::create([
            'id'        => $request->id,
            'nmpelanggan'        => $request->nmpelanggan,
            'nmtoko'        => $request->nmtoko,
            'kdtoko'        => $newKdtoko, // Menggunakan kdtoko baru
            'jmlkom'        => $request->jmlkom,
            'alamat'        => $request->alamat,
            'kecamatan'        => $request->kecamatan,
            'kabupaten'        => $request->kabupaten,
            'provinsi'        => $request->provinsi,
            'kodepos'        => $request->kodepos,
            'notelp'        => $request->notelp,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect('/all-lisensi');
    }




    public function ubah($id){
        $edit = DB::table('tblisensi')->where('id',$id)->first();
        return view('backend.lisensi.edit_lisensi',compact('edit'));
    }
    public function update($id, request $request){
        $lisensi = lisensiModel::find($id);
        $lisensi->update($request->except('_token', '_method'));
        return redirect('/all-lisensi');
    }

    public function hapus($id){

        $delete = DB::table('tblisensi')->where('id', $id)->delete();
        if($delete){
            return redirect('/all-lisensi');
        } else{
            echo "Upss! Something is wrong";
        }
    }
}
