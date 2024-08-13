<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boneka;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade as PDF;
use DataTables;


class BonekaController extends Controller
{
    public function index()
    {
        $boneka = Boneka::all();
        return view('admin.dashboard', ['boneka' => $boneka]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,tif|max:2048',
        ]);

        if ($validator->fails()) {
            return Response::json(['errors' => $validator->errors()], 422);
        }

        $bonekaId = $request->boneka_id;

        $image = $request->hidden_image;

        if ($files = $request->file('image')) {
            \File::delete('public/boneka/' . $request->hidden_image);
            $destinationPath = 'public/boneka/';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $image = $profileImage;
        }

        $boneka = Boneka::find($bonekaId) ?? new Boneka();
        $boneka->nama = $request->nama;
        $boneka->jenis = $request->jenis;
        $boneka->stok = $request->stok;
        $boneka->harga = $request->harga;
        $boneka->image = $image;

        $boneka->save();

        return Response::json($boneka);
    }

    public function show($id): JsonResponse
    {
        $boneka = Boneka::find($id);
        return response()->json($boneka);
    }

    public function edit(string $id): JsonResponse
    {
        $boneka = Boneka::find($id);
        return Response::json($boneka);
    }

    public function destroy(string $id)
    {
        $data = Boneka::where('id', $id)->first(['image']);
        \File::delete('public/boneka/' . $data->image);
        $boneka = Boneka::where('id', $id)->delete();

        return response()->json($boneka);
    }

    public function exportPDF()
    {
        $bonekas = Boneka::all();
        $pdf = PDF::loadView('boneka.pdf', compact('bonekas'));
        return $pdf->download('boneka.pdf');
    }
}