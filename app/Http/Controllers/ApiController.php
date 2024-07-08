<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        // Lógica para salvar o usuário
        // Exemplo básico:
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json($user, 201);
    }
}
