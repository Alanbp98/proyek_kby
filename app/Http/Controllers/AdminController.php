<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    // public function users()
    // {
    //     // Logika untuk menampilkan daftar pengguna (misalnya dari database)
    //     $users = User::all();

    //     return view('admin.users', ['users' => $users]);
    // }

    public function createUser(Request $request)
    {
        // Logika untuk membuat pengguna baru (misalnya menyimpan ke database)
        // $request berisi data yang dikirim dari form pembuatan pengguna

        // Simpan pengguna baru ke database
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect('/admin/users')->with('success', 'Pengguna berhasil ditambahkan');
    }
}
