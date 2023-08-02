<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokoModel extends Model
{
    use HasFactory;
    protected $table = 'tbtoko';
    protected $guarded = [];
    protected $fillable = [
        'id',
        'kdtoko',         
        'nmtoko',
        'alamat', 
        'kecamatan', 
        'kabupaten', 
        'provinsi', 
        'kodepos', 
        'notelp',
    ];
}
