<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user', ['users' => $users]);
    }

    public function show($id): JsonResponse
    {
        $user = User::find($id);
        return response()->json($user);
    }

}
