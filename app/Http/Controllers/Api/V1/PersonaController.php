<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();

        $Persona = new Persona;
        $Persona->Nombre = $data['nombre'];
        $Persona->Apellidos = $data['apellidos'];
        $Persona->Telefono = $data['telefono'];
        $Persona->CURP = $data['curp'];
        $Persona->Direccion = $data['direccion'];
        $Persona->save();

        return response()->json($Persona);
    }

    public function update(Request $request)
    {
        $data = $request->json()->all();
        if (!empty($data['id'])) {
            $Persona = Persona::find($data['id']);
            if (!empty($data['telefono'])) {
                $Persona->Telefono = $data['telefono'];
            }
            if (!empty($data['direccion'])) {
                $Persona->Direccion = $data['direccion'];
            }
            $Persona->save();
        }

        return response()->json($Persona);
    }
}
