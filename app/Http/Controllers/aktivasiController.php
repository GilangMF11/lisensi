<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aktivasiModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class aktivasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $aktivasi = DB::table('tbaktivasi')->get();

        return view('backend.aktivasi.all-aktivasi', compact('aktivasi'));

    }

    public function tambah(){
        return view('backend.aktivasi.add_aktivasi');
    }

    public function simpan(Request $request)
    {
        $jumlahKomputer = $request->input('komputer', 1); // Jumlah komputer yang diinputkan (default: 1 jika tidak ada input)

        for ($i = 0; $i < $jumlahKomputer; $i++) {
            $token = Str::random(16); // Membuat token acak 16 karakter yang terdiri dari nomor dan huruf

            $simpan = aktivasiModel::create([
                'id'        => $request->id,
                'kdtoko'    => $request->kdtoko,
                'nmtoko'    => $request->nmtoko,
                'periode'    => $request->periode,
                'komputer'  => $i + 1, // Nomor urut komputer
                'token'     => $token,
                'tgl_akt'   => $request->tgl_akt,
                'tgl_exp'   => $request->tgl_exp,
                'flex'      => $request->flex,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        
        return redirect('/all-aktivasi');
    }



    public function ubah($id){
        $edit = DB::table('tbaktivasi')->where('id',$id)->first();
        return view('backend.aktivasi.edit_aktivasi',compact('edit'));
    }
    public function update($id, request $request){
        $aktivasi = aktivasiModel::find($id);
        $aktivasi->update($request->except('_token', '_method'));
        return redirect('/all-aktivasi');
    }

    public function hapus($id){

        $delete = DB::table('tbaktivasi')->where('id', $id)->delete();
        if($delete){
            return redirect('/all-aktivasi');
        } else{
            echo "Upss! Something is wrong";
        }
    }


}
