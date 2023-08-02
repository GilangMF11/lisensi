<?php

namespace App\Observers;

use App\Models\tokoModel;
use App\Models\lisensiModel as Lisensi;

class LisensiObserver
{
    /**
     * Handle the Lisensi "created" event.
     */
    public function created(Lisensi $lisensi) // Use the correct model name here as well
    {
        // Your logic to add data to "tbtoko" table using the $lisensi model
        // For example:
        tokoModel::create([
            'nmtoko' => $lisensi->nmtoko,
            'kdtoko' => $lisensi->kdtoko,
            'alamat' => $lisensi->alamat,
            'kecamatan' => $lisensi->kecamatan,
            'kabupaten' => $lisensi->kabupaten,
            'provinsi' => $lisensi->provinsi,
            'kodepos' => $lisensi->kodepos,
            'telp' => $lisensi->telp,
        ]);
    }

    /**
     * Handle the Lisensi "updated" event.
     */
    public function updated(Lisensi $lisensi): void
    {
        //
    }

    /**
     * Handle the Lisensi "deleted" event.
     */
    public function deleted(Lisensi $lisensi): void
    {
        //
    }

    /**
     * Handle the Lisensi "restored" event.
     */
    public function restored(Lisensi $lisensi): void
    {
        //
    }

    /**
     * Handle the Lisensi "force deleted" event.
     */
    public function forceDeleted(Lisensi $lisensi): void
    {
        //
    }
}
