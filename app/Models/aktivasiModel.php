<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktivasiModel extends Model
{
    use HasFactory;
    protected $table = 'tbaktivasi';
    protected $guarded = [];
    protected $fillable = [
        'id',         
        'nmtoko',
        'kdtoko',
        'komputer',
        'periode',
        'token', 
        'tgl_akt',
        'tgl_exp',
        'flex'
    ];
}
