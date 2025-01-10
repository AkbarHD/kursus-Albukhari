<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; // Import Mail
use App\Mail\CustomerRegistered; // Import CustomerRegistered

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|string|numeric',
        ]);

        // Simpan ke database
        DB::table('formulir')->insert([
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'no_hp' => $validatedData['no_hp'],
        ]);

        // Kirim email                                                                      // validate nama untuk construct di login email
        Mail::to($validatedData['email'])->send(new CustomerRegistered($validatedData['nama']));

        return redirect()->back()->with('success', 'Formulir berhasil dikirim.');
    }

}
