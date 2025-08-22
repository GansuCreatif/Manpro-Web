<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ValidateController extends Controller
{
    public function validate(Request $request)
    {
        $token = $request->query('token');
        if (!$token) {
            abort(401, 'Token not provided');
        }

        // Panggil API validate
        $response = Http::withToken($token)
            ->post('https://api-beta.kai.id/kaisuperapps/auth/get-user-token');
        if ($response->successful()) {
            $userData = $response->json();

            // Simpan user info ke session aplikasi lokal
            session(['user' => $userData]);
            return redirect('/'); // masuk ke aplikasi tanpa login ulang
        }

        abort(401, 'Invalid or expired token');
    }
}
