<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
class DataController extends Controller
{
    public function home()
    {
        $data = Data::all();
        return view('home', ['data' => $data]);
    }

    public function input()
    {
        return view('input_data');
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'umur'          => 'required',
            'jenis_kelamin' => 'required',
            'perusahaan'    => 'required',
            'posisi'        => 'required',
            'tgl_mulai'     => 'required',
            'tgl_akhir'     => 'required'
        ]);

        Data::create([
            'nama'          => $request->nama,
            'umur'          => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'perusahaan'    => $request->perusahaan,
            'posisi'        => $request->posisi,
            'tgl_mulai'     => $request->tgl_mulai,
            'tgl_akhir'     => $request->tgl_akhir,
        ]);
        return redirect('/');
    
    }

    public function edit($id)
    {
        $data = Data::find($id);
        return view('edit_data',['data' => $data]);
    }

    public function hapus($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect('/');
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama'          => 'required',
            'umur'          => 'required',
            'jenis_kelamin' => 'required',
            'perusahaan'    => 'required',
            'posisi'        => 'required',
            'tgl_mulai'     => 'required',
            'tgl_akhir'     => 'required'
        ]);

        $data = Data::find($id);
        $data->nama          = $request->nama;
        $data->umur          = $request->umur;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->perusahaan    = $request->perusahaan;
        $data->posisi        = $request->posisi;
        $data->tgl_mulai     = $request->tgl_mulai;
        $data->tgl_akhir     = $request->tgl_akhir;
        $data->updated_at   = date('Y-m-d H:i:s');
        $data->save();
        return redirect('/');
    }

    public function highcharts() {

        $grafik = Data::getGrafik();
        
        return view('highcharts', compact('grafik'));
    }

    public function diagrampie() {

        $grafik = Data::getGrafik();
        
        return view('diagrampie', compact('grafik'));
    }

    
}
