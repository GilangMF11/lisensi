<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class DependentDropdownController extends Controller
{
    public function provinces()
    {
        return Province::allProvinces();
    }

    public function cities(Request $request)
    {
        return Province::findProvince($request->id, ['cities'])->cities->pluck('name', 'id');
    }

    public function districts(Request $request)
    {
        return District::findCity($request->id, ['districts'])->districts->pluck('name', 'id');
    }

    public function villages(Request $request)
    {
        return village::findDistrict($request->id, ['villages'])->villages->pluck('name', 'id');
    }

    public function index()
    {
        $desa = Village::pluck('name', 'id');
        $kecamatan = District::pluck('name', 'id');
        $provinces = Province::pluck('name', 'id');

        return view('dependent-dropdown.index', [
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))
            ->pluck('name', 'id');
    
        return response()->json($cities);
    }

}