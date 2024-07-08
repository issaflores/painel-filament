<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        // Lógica para salvar o usuário
        // Exemplo básico:
        
        { $data = $request->validated();
        $user = User::$user = User::create($data);

            return formatJson(status: 201, message:"Sucesso", data:$user);
        }
    }
}
