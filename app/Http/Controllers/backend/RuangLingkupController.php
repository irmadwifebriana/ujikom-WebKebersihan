<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RuangLingkup;

class RuangLingkupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allDataRuang']=RuangLingkup::all();
        return view('admin.Ruang Lingkup.RuangLingkup_view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRuangLingkup()
    {
        return view('admin.Ruang Lingkup.RuangLingkup_add_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRuangLingkup(Request $request)
    {
         $validateData= $request->validate([
               'nama_lingkup'=> 'required',
            //    'nama_ruang' => 'required',        
     
           ]);
         
           $data = new RuangLingkup();
        //    $data->deskripsi=$request->deskripsi;
           $data->nama_lingkup=$request->nama_lingkup;
           
        
           $data->save();
       
       
           
           return redirect()->route('Lingkup_view')->with('info','Tambah Alat berhasil');
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
    public function editRuangLingkup($id)
    {
        $editData= RuangLingkup::find($id);
        return view('admin.Ruang Lingkup.RuangLingkup_edit_view', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRuangLingkup(Request $request, $id)
    {
        $validateData= $request->validate([
            //    'deskripsi'=> 'required',
               'nama_lingkup' => 'required',        
     
           ]);
         
           $data=RuangLingkup::find($id);
        //    $data->deskripsi=$request->deskripsi;
           $data->nama_lingkup=$request->nama_lingkup;
           
        
           $data->save();
       
       
           
           return redirect()->route('Lingkup_view')->with('info','Tambah Ruang Lingkup berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteRuangLingkup($id)
    {
        $deleteData= RuangLingkup::find($id);
        $deleteData->delete();

        return redirect()->route('Lingkup_view')->with('info','Delete Ruang Lingkup berhasil');
    }
}