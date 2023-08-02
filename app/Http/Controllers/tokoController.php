<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tokoModel;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class tokoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $toko = DB::table('tbtoko')->get(); //Mengambil data provinces dari model Province

    return view('backend.toko.all-toko', compact('toko')); 

    }

    public function tambah(Request $request)
    {
        // Mendapatkan data provinces untuk dropdown pada view
        $provinsi = \Indonesia::allProvinces()->sortBy('name')->pluck('name', 'id');
        $route_get_kota = route('get.kota');
        $route_get_kecamatan = route('get.kecamatan');
        $route_get_kabupaten = route('get.kabupaten');
        $route_get_kelurahan = route('get.kelurahan');
        

    
        // Jika tidak ada parameter 'id' (permintaan langsung ke halaman), tampilkan halaman add_toko dengan data provinces
        return view('backend.toko.add_toko', compact('provinsi', 'route_get_kota', 'route_get_kecamatan', 'route_get_kabupaten', 'route_get_kelurahan'));
    }
    

    public function simpan(Request $request)
    {
                   // Mendapatkan kdtoko terakhir dari database
        $lastKdtoko = tokoModel::orderBy('id', 'desc')->value('kdtoko');

        // Memecah kdtoko terakhir untuk mendapatkan nomor
        $lastNumber = (int) substr($lastKdtoko, strlen('TOKO-'));

        // Membuat kdtoko baru dengan menambahkan 1 pada nomor sebelumnya
        $newKdtoko = 'TOKO-' . ($lastNumber + 1);


        $simpan = tokoModel::create([
            'id'        => $request->id,
            'kdtoko'    => $newKdtoko,
            'nmtoko'    => $request->nmtoko,
            'alamat'    => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi'  => $request->provinsi,
            'kodepos'   => $request->kodepos,
            'alamat'    => $request->alamat,
            'notelp'    => $request->notelp,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect('/all-toko');
    }



    public function ubah($id){
        $edit = DB::table('tbtoko')->where('id',$id)->first();
        return view('backend.toko.edit_toko',compact('edit'));
    }
    public function update($id, request $request){
        $toko = tokoModel::find($id);
        $toko->update($request->except('_token', '_method'));
        return redirect('/all-toko');
    }

    public function hapus($id){

        $delete = DB::table('tbtoko')->where('id', $id)->delete();
        if($delete){
            return redirect('/all-toko');
        } else{
            echo "Upss! Something is wrong";
        }
    }

    //Laravolt
    //Mendapatkan Data Kota 

    public function get_kota()
    {
        $province_id = request('province_id');
        $kota = \Indonesia::findProvince($province_id, ['cities'])->cities->sortBy('name')->pluck('name', 'id')->toArray();

        return view('backend.toko.add_toko', compact('kota'));
    }

    public function get_kecamatan()
    {
        $city_id = request('city_id');
        $kecamatan = \Indonesia::findCity($city_id, ['districts'])->districts->sortBy('name')->pluck('name', 'id')->toArray();

        return view('backend.toko.add_toko', compact('kecamatan'));
    }

    public function get_kelurahan()
    {
        $kecamatan_id = request('kecamatan_id');
        $kelurahan = \Indonesia::findDistrict($kecamatan_id, ['villages'])->villages->sortBy('name')->pluck('name', 'id')->toArray();

        return view('backend.toko.add_toko', compact('kelurahan'));
    }

}
