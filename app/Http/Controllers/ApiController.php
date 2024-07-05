<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    use ApiResponse;

    public function show($id)
    {
        $user = User::find($id);

        if ($user) {
            return $this->successResponse($user, 'User found', 200);
        }

        return $this->errorResponse('User not found', 404);
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $this->successResponse($user, 'User created successfully', 201);
    }
}
