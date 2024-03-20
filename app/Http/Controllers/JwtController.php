<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class JwtController extends Controller
    {
        private $key = 'yourSecretKey'; // Use a strong secret key

        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $this->createToken($user->id);
                return response()->json([
                    'token' => $token,
                    'user' => $user
                ]);
            }

            return response()->json(['error' => 'Unauthorized'], 401);
        }

        private function createToken($userId)
        {
            $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
            $payload = json_encode(['user_id' => $userId, 'exp' => time() + (60 * 60)]); // 1 hour expiration

            $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
            $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

            $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $this->key, true);
            $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

            return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
        }
    }
