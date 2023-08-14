<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bagian;
use App\Models\RuangLingkup;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allDataBagian'] = Bagian::with('ruanglingkup')->get();
        return view('admin.Bagian.Bagian_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBagian()
    {
        $ruanglingkup = RuangLingkup::all();
        return view('admin.Bagian.Bagian_add_view', compact('ruanglingkup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBagian(Request $request)
    {
        $validateData = $request->validate([
            //    'deskripsi_poliwangi'=> 'required',
            'id_ruanglingkup' => 'required',
            'nama' => 'required',

        ]);

        $data = new Bagian();
        $data->id_ruanglingkup = $request->id_ruanglingkup;
        $data->nama = $request->nama;


        $data->save();



        return redirect()->route('Bagian_view')->with('info', 'Tambah Data berhasil');
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
    public function editBagian($id)
    {
        $ruanglingkup = RuangLingkup::all();
        $editData = Bagian::with('ruanglingkup')->findorfail($id);
        return view('admin.Bagian.Bagian_edit_view', compact('editData', 'ruanglingkup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBagian(Request $request, $id)
    {
        $validateData = $request->validate([
            //    'deskripsi_poliwangi'=> 'required',
            'id_ruanglingkup' => 'required',
            'nama' => 'required',

        ]);

        $data = Bagian::find($id);
        $data->id_ruanglingkup = $request->id_ruanglingkup;
        //    $data->deskripsi_poliwangi=$request->deskripsi_poliwangi;
        $data->nama = $request->nama;


        $data->save();



        return redirect()->route('Bagian_view')->with('info', 'Edit Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteBagian($id)
    {
        $deleteData = Bagian::find($id);
        $deleteData->delete();

        return redirect()->route('Bagian_view')->with('info', 'Delete Data berhasil');
    }
}
