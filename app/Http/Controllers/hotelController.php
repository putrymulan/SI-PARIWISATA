<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\hotel;
use Barryvdh\DomPDF\Facade\Pdf;

class hotelController extends Controller
{
    public function index(){
        $data = hotel::get(); 
        return view('Administrator/Hotels/Hotel', compact('data'));
    }

    public function add(){
        $data_pegawai = pegawai::get();
        return view('Administrator/Hotels/addHotel', compact( 'data_pegawai'));
    }

    public function insertdata(Request $request){
        hotel::create($request->all());
        return redirect()->route('hotel');
    }

    public function readdata($id){
        $data = hotel::find($id);
        return view('Administrator/Hotels/addHotel' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = hotel::find($id);
        $data->update($request->all());
        return redirect()->route('hotel');
    }

    public function deletedata($id){
        $data = hotel::find($id);
        $data->delete();
        return redirect()->route('hotel');
    }

    public function exportpdf(){
        $data = hotel::all();
        $PDF = PDF::loadView('Administrator/Hotels/addHotel', array('data' => $data));
        return $PDF->stream('data-hotel.pdf');
    }
}