<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use Barryvdh\DomPDF\Facade\Pdf;

class pegawaiController extends Controller
{
    public function index(){
        $data = pegawai::get(); 
        return view('Administrator/Pegawais/Pegawai', compact('data'));
    }

    public function add(){
        return view('Administrator/Pegawais/addPegawai');
    }

    public function insertdata(Request $request){
        pegawai::create($request->all());
        return redirect()->route('pegawai');
    }

    public function readdata($id){
        $data = pegawai::find($id);
        return view('Administrator/Pegawais/updatePegawai' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai');
    }

    public function deletedata($id){
        $data = pegawai::find($id);
        $data->delete();
        return redirect()->route('pegawai');
    }

    public function exportpdf(){
        $data = pegawai::all();
        $PDF = PDF::loadView('Administrator/Pegawais/reportPegawai', array('data' => $data));
        return $PDF->stream('data-pegawai.pdf');
    }
}
