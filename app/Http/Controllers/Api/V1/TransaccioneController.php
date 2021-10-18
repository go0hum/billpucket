<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Transaccione;

class TransaccioneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function list()
    {
        $data = Transaccione::paginate(request()->all());
        return response()->json($data, 200);
    }
}
