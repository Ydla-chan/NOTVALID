<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function logini(Request $request)
    {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required',
            ]);
    
            $username = $request->input('username');
            $password = $request->input('password');
    
            // Lakukan validasi username dan password
            $response = Http::post('http://sid.polibatam.ac.id/api/v1.php', [
                'act' => 'Login',
                'username' => $username,
                'password' => $password
            ]);
    
            $jsonArray = $response->json();
    
            if ( $jsonArray['error_code'] == 0) {
                // Jika login berhasil, simpan data pengguna ke dalam session
                $secretkey = $jsonArray['data']['secretkey'];
    
                $response = Http::post('http://sid.polibatam.ac.id/api/v1.php', [
                    'act' => 'GetBiodata',
                    'secretkey' => $secretkey,
                ]);
    
                $jsonArray = $response->json();

                dd($jsonArray);
    
                session()->put('Name', $jsonArray['data']['nama']);
                session()->put('Email', $jsonArray['data']['email']);
                session()->put('Jabatan', $jsonArray['data']['role']);
                session()->put('Jurusan', $jsonArray['data']['Jurusan']);
                session()->put('id', $jsonArray['data']['id']);
    
                return redirect()->route('index')->with('success', 'Berhasil login');
            } else {
                // Jika login gagal, kembalikan ke halaman login dengan pesan error
                return redirect()->back()->withInput()->with('error', 'Username atau password salah');
            }
        
    }
    
}