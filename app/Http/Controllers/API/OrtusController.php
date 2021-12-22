<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ortus;
use Illuminate\Http\Request;

class OrtusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ortus = Ortus::getOrtus()->paginate(5);
        return response()->json($ortus);
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
        $dataOrtu = $request->validate([
            'nama_ayah' => ['required', 'max:150'],
            'nik_ayah' => ['required', 'unique:ortus,nik_ayah', 'max:16'],
            'nama_ibu' => ['required', 'max:150'],
            'nik_ibu' => ['required', 'unique:ortus,nik_ibu', 'max:16'],
            'tmpt_lahir_ayah' => ['required', 'max:100'],
            'tgl_lahir_ayah' => ['required'],
            'tmpt_lahir_ibu' => ['required', 'max:100'],
            'tgl_lahir_ibu' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'stts_bumil' => ['required'],
            'id_kader_bumil' => ['required'],
            'tgl_meninggal' => [],
        ]);

        try {
            $response = Ortus::create($dataOrtu);
            return response()->json([
                'succsess' => true,
                'message' => 'succsess',
                'data' => $response,
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
        $ortu = Ortus::find($id)->first();
        return response()->json($ortu);
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
        $dataOrtu = $request->validate([
            'nama_ayah' => ['required', 'max:150'],
            'nik_ayah' => ['required', 'max:16'],
            'nama_ibu' => ['required', 'max:150'],
            'nik_ibu' => ['required', 'max:16'],
            'tmpt_lahir_ayah' => ['required', 'max:100'],
            'tgl_lahir_ayah' => ['required'],
            'tmpt_lahir_ibu' => ['required', 'max:100'],
            'tgl_lahir_ibu' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'stts_bumil' => ['required'],
            'id_kader_bumil' => ['required'],
            'tgl_meninggal' => [],
        ]);

        try {
            $ortu = Ortus::find($id);
            $response = $ortu->update($dataOrtu);
            return response()->json([
                'succsess' => true,
                'message' => 'succsess',
                'data' => $response,
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
            $dataOrtu = Ortus::find($id);
            $dataOrtu->delete();
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data deleted' => $dataOrtu,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Err',
                'errors' => $e->getMessage(),
            ]);
        }
    }
}
