<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    /**
     * Handle the incoming login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validasi request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek validasi
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Validation errors', 'errors' => $validator->errors()], 422);
        }

        try {
            // Mencoba untuk melakukan autentikasi
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user(); // Dapatkan user yang login
                $tokenResult = $user->createToken('authToken'); // Buat token
                $token = $tokenResult->plainTextToken; // Ambil hanya string token

                // Jika sukses, kirim respon sukses
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful',
                    'data' => [
                        'user' => $user,
                        'access_token' => $token,
                    ]
                ]);
            } else {
                // Jika login gagal, kirim respon error
                return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
            }
        } catch (\Exception $e) {
            // Menangkap kesalahan yang mungkin terjadi
            return response()->json(['success' => false, 'message' => 'Error occurred', 'error' => $e->getMessage()], 500);
        }
    }
}
