<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DonaturController extends Controller
{
    public function dashboard2()
    {
        return view('dashboard2');
    }

    // public function donations()
    // {
    //     // Logika untuk menampilkan daftar donasi (misalnya dari database)
    //     $donations = Donation::all();

    //     return view('donatur.donations', ['donations' => $donations]);
    // }

    public function makeDonation(Request $request)
    {
        // Logika untuk membuat donasi baru (misalnya menyimpan ke database)
        // $request berisi data yang dikirim dari form pembuatan donasi

        // Simpan donasi baru ke database
        Donation::create([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            // ...
        ]);

        return redirect('/donatur/donations')->with('success', 'Donasi berhasil dibuat');
    }
}
