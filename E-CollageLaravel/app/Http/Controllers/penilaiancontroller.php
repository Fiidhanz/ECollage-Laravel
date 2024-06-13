<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Penilaian; 

class penilaiancontroller extends Controller{
    public function index(){
    $penilaians = Penilaian::all();
    return view('penilaian/penilaian', compact('penilaians'));
}
public function add(){
    return view('penilaian/addpenilaian');
}

public function insertdata(Request $request){
    Penilaian::create($request->all());
    return redirect()->route('penilaian');
}

public function readdata($id){
    $penilaians = Penilaian::find($id);
    return view('penilaian/updatepenilaian' , compact('penilaians'));
}

public function updatedata(Request $request, $id){
    $penilaians = penilaian::find($id);
    $penilaians->update($request->all());
    return redirect()->route('penilaian');
}

public function deletedata($id){
    $penilaians = penilaian::find($id);
    $penilaians->delete();
    return redirect()->route('penilaian');
}
public function exportpdf(){
    $penilaians = penilaian::all();
    $PDF = PDF::loadView('penilaian/reportpenilaian', array('penilaians' => $penilaians));
    return $PDF->stream('data-penilaian.pdf');
}

}
