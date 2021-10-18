<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function user()
    {
        return response()->json(auth()->user());
    }

    public function exist(Request $request)
    {
        $data = $request->json()->all();
        if (!empty($data['id'])) {
            $User = User::find($data['id']);
            $User->persona_id = $data['persona_id'];
            $User->save();
        }
        return response()->json($User);
    }

    public function store(Request $request)
    {
        if (empty($data['persona_id'])) {
            return response()->json("persona_id is empty", 400);
        }

        $token = auth()->refresh();
        $data = $request->json()->all();
        $User = new User;
        $User->Username = $data['username'];
        $User->Password = sha1($data['password']);
        $User->Estatus = 1;
        $User->Token = $token;
        $User->persona_id = $data['persona_id'];
        $User->save();

        return response()->json([
            'Data' => $User,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function down(Request $request)
    {
        $data = $request->json()->all();
        if (!empty($data['id'])) {
            $User = User::find($data['id']);
            $User->Estatus = 0;
            $User->save();
        }
        return response()->json($User);
    }
}
