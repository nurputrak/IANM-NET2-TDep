<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function Show(){
        
        $layanans = Layanan::all();
        return view('admin.layanan',['layanans' => $layanans]);
    }
    // public function Edit(){
    //     return view('admin.edituser ');
    // }
    public function Add(){
        return view('admin.tambahlayanan');
    }
    public function InsertLayanan(Request $request){
        Layanan::create([
            'ln_name' => $request->ln_name,
            'ln_bandwidth' => $request->ln_bandwidth,
            'ln_describe' => $request->ln_describe,
            'ln_price' => $request->ln_price,
        ]);
        
        return redirect()->route('listLayanan')->with('success','Data berhasil ditambahkan');
    }
    
    
    public function TampilData($id){
        $layanan = Layanan::find($id);
        // dd($user);
        return view('admin.editlayanan', compact('layanan'));
    }
    public function SaveLayanan(Request $request, $id){
        $layanan = Layanan::find($id);
        // dd($user);
        $layanan->update($request->all());
        
        return redirect()->route('listLayanan')->with('success','Data berhasil diubah');
    }
    public function DeleteLayanan($id){
        $layanan = Layanan::find($id);
        // dd($user);
        $layanan->delete();
        
        return redirect()->route('listLayanan')->with('success','Data berhasil dihapus');
    }
}
