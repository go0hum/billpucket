<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();

        $Cuenta = new Cuenta;
        $Cuenta->NumeroCuenta = $data['cuenta'];
        $Cuenta->Producto = $data['producto'];
        $Cuenta->Saldo = $data['saldo'];
        $Cuenta->nip = $data['nip'];
        $Cuenta->personas_id = $data['personas_id'];
        $Cuenta->save();

        return response()->json($Cuenta);
    }
}
