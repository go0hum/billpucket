<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $data = $request->json()->all();
        $Password = sha1($data['password']);
        $User = User::where('Username', $data['username'])
                ->where('Password', $Password)
                ->where('Estatus', 1)
                ->first();
        if (!$token = auth()->login($User)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $User->Token = $token;
        $User->save();

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
