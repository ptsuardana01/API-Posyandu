<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PemeriksaanBumils;
use Illuminate\Http\Request;

class PemeriksaanBumilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_bumil = PemeriksaanBumils::getPemeriksaanBumil()->get('*');
        return response()->json($data_bumil);
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
        $pemeriksaanBumil = $request->validate([
            'tb' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'lila' => ['required', 'numeric'],
            'id_bumil' => ['required'],
        ]);
        try {
            $response = PemeriksaanBumils::create($pemeriksaanBumil);
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
        $pemeriksaanBumil = PemeriksaanBumils::find($id)->first();
        return response()->json($pemeriksaanBumil);
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
        $pemeriksaanBumil = $request->validate([
            'tb' => ['required', 'numeric'],
            'bb' => ['required', 'numeric'],
            'lila' => ['required', 'numeric'],
            'id_bumil' => ['required'],
        ]);
        try {
            $response = PemeriksaanBumils::find($id);
            $response->update($pemeriksaanBumil);
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
            $response = PemeriksaanBumils::find($id);
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
