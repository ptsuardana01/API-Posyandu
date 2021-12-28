<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kaders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaders = Kaders::paginate(10);
        return response()->json($kaders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataKader = $request->validate([
            'nama' => ['required', 'max:255'],
            'nik' => ['required', 'unique:kaders,nik', 'max:16'],
            'kd_kader' => ['required', 'max:5'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'jk' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
        ]);
        try {
            $response = Kaders::create($dataKader);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kaders = Kaders::find($id);
        return response()->json($kaders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $dataKader = $request->validate([
            'nama' => ['required', 'max:255'],
            'nik' => ['required', 'max:16'],
            'kd_kader' => ['required', 'max:5'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'jk' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
        ]);


        // if ($dataKader->fails()) {
        //     return response()->json($dataKader->errors(),422);
        // }

        try {
            $kader = Kaders::findOrFail($id);
            $response = $kader->update($dataKader);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $dataKader = Kaders::find($id);
            $dataKader->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data deleted' => $dataKader,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage(),
            ]);
        }
    }
}
