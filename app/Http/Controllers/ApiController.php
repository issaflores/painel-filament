<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated);
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }
}
