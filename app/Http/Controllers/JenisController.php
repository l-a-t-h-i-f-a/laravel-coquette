<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use DataTables;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        return view('admin.jenis', ['jenis' => $jenis]);
    }

    public function show($id): JsonResponse
    {
        $jenis = Jenis::find($id);
        return response()->json($jenis);
    }

}
