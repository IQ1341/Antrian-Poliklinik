<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    public function storeAntrian(Request $request)
    {
        // Validasi data yang masuk dari form
        $request->validate([
            'nomor_hp' => 'required|string|max:255',
            'poliklinik' => 'required|string|max:255',
        ]);
    
        // Tentukan prefix berdasarkan pilihan poliklinik
        $prefix = '';
        switch ($request->poliklinik) {
            case 'Poli Gigi':
                $prefix = 'G';
                break;
            case 'Poli Umum':
                $prefix = 'U';
                break;
            default:
                $prefix = 'O';
                break;
        }
    
        // Menghitung nomor antrian berikutnya berdasarkan poliklinik
        $nextAntrianNumber = DB::transaction(function () use ($prefix) {
            $latestAntrian = Antrian::where('nomor_antrian', 'like', $prefix . '%')->orderBy('nomor_antrian', 'desc')->lockForUpdate()->first();

            if ($latestAntrian) {
                $lastNumber = intval(substr($latestAntrian->nomor_antrian, 1));
                $nextNumber = $lastNumber + 1;
                return $prefix . $nextNumber;
            } else {
                return $prefix . '1';
            }
        });
    
        // Simpan data antrian ke dalam database
        $antrian = new Antrian([
            'nomor_hp' => $request->nomor_hp,
            'poliklinik' => $request->poliklinik,
            'status' => 'Menunggu',
            'nomor_antrian' => $nextAntrianNumber,
            'user_id' => Auth::id()  // Menggunakan ID pengguna yang saat ini masuk
        ]);
    
        $antrian->save();
        // Tampilkan SweetAlert2 setelah berhasil menyimpan data antrian
        return redirect()->back()->with('success', 'Antrian berhasil diambil! Nomor Antrian Anda adalah ' . $nextAntrianNumber);
    }
}
