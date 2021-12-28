<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PemeriksaanBalitas;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;

class PemeriksaanBalitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_balita = PemeriksaanBalitas::getPemeriksaanBalita()->get('*');
        return response()->json($data_balita);
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
        $pemeriksaanBalita = $request->validate([
            'tb' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'lk' => ['required', 'numeric'],
            'id_balita' => ['required'],
        ]);
        try {
            $response = PemeriksaanBalitas::create($pemeriksaanBalita);
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
        //
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
        $pemeriksaanBalita = $request->validate([
            'tb' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'lk' => ['required', 'numeric'],
            'id_balita' => ['required'],
        ]);
        try {
            $response = PemeriksaanBalitas::find($id);
            $response->update($pemeriksaanBalita);
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
            $response = PemeriksaanBalitas::find($id);
            $response->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data deleted' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage(),
            ]);
        }
    }
}
