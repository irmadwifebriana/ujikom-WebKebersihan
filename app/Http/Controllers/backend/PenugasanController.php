<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use Illuminate\Http\Request;
use App\Models\Penugasan;

class PenugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allDataPenugasan'] = Penugasan::with('bagian')->get();
        return view('admin.Penugasan.Penugasan_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPenugasan()
    {
        $bagian = Bagian::all();
        return view('admin.Penugasan.Penugasan_add_view', compact('bagian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePenugasan(Request $request)
    {
        $validateData = $request->validate([
            'id_bagian' => 'required',
            'nama_petugas' => 'required'
        ]);

        $data = new Penugasan();
        $data->id_bagian = $request->id_bagian;
        $data->nama_petugas = $request->nama_petugas;

        $data->save();



        return redirect()->route('Penugasan_view')->with('info', 'Tambah Alat berhasil');
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
    public function editPenugasan($id)
    {
        $bagian = Bagian::all();
        $editData = Penugasan::with('bagian')->findorfail($id);
        return view('admin.Penugasan.Penugasan_edit_view', compact('editData', 'bagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePenugasan(Request $request, $id)
    {
        $validateData = $request->validate([
            //    'deskripsi_poliwangi'=> 'required',
            'id_bagian' => 'required',
            'nama_petugas' => 'required',

        ]);

        $data = Penugasan::find($id);
        $data->id_bagian = $request->id_bagian;
        //    $data->deskripsi_poliwangi=$request->deskripsi_poliwangi;
        $data->nama_petugas = $request->nama_petugas;


        $data->save();



        return redirect()->route('Penugasan_view')->with('info', 'Edit Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePenugasan($id)
    {
        $deleteData = Penugasan::find($id);
        $deleteData->delete();

        return redirect()->route('Penugasan_view')->with('info', 'Delete Data berhasil');
    }
}
