<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
    {
        public function login(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);



            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken(config('app.name'))->accessToken;
                return response()->json(['token' => $token], 200);
            }

            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
