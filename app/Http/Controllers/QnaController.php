<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use Illuminate\Http\Request;

class QnaController extends Controller
{
    public function Show(){
        
        $qnas= Qna::all();
        return view('admin.qna',['qnas' => $qnas]);
    }

    public function TampilData($id){
        $qnas = Qna::find($id);
        // dd($user);
        return view('admin.editqna', compact('qnas'));
    }

    public function SaveQna(Request $request, $id){
        $qna = Qna::find($id);
        // dd($user);
        $qna->update($request->all());
        
        return redirect()->route('listQna')->with('success','Data berhasil diubah');
    }
}
