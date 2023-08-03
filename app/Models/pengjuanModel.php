<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengjuanModel extends Model
{
    use HasFactory;
    protected $table = 'tblisensi';
    protected $guarded = [];
    protected $fillable = [
        'id',         
        'nmpelanggan',
        'kdtoko',
        'nmtoko',
        'jmlkom',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kodepos', 
        'notelp',
    ];
}
