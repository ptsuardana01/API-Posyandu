<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use Illuminate\Http\Request;

class BalitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset($_GET['search']) && $_GET['search'] != '') {
            $balitas = Balitas::getBalitas()->where('nama_ibu', 'like', '%' . $_GET['search'] . '%')->paginate(10);
        } else {
            $balitas = Balitas::getBalitas()->paginate(10);
        }
        return response()->json($balitas);
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
        $dataBalita = $request->validate([
            'nama' => ['required', 'max:255'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'jk' => ['required'],
            'stts_balita' => ['required'],
            'tgl_meninggal' => [],
            'id_ortu' => ['required'],
            'id_kader_balita' => ['required'],
        ]);
        try {
            $response = Balitas::create($dataBalita);
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
        $balitas = Balitas::find($id)->first();
        return response()->json($balitas);
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
        $dataBalita = $request->validate([
            'nama' => ['required', 'max:255'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'jk' => ['required'],
            'stts_balita' => ['required'],
            'tgl_meninggal' => [],
            'id_ortu' => ['required'],
            'id_kader_balita' => ['required'],
        ]);
        try {
            $response = Balitas::find($id);
            $response->update($dataBalita);
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
            $response = Balitas::find($id);
            $response->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data deleted' => $response,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage(),
            ]);
        }
    }
}
