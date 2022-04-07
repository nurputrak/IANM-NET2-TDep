<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Show(){
        
        $users = User::all();
        return view('admin.userlist',['users' => $users]);
    }
    public function Edit(){
        return view('admin.edituser ');
    }
    public function Add(){
        return view('admin.tambahuser');
    }
    public function InsertUser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
        ]);
        
        return redirect()->route('listUsers')->with('success','Data berhasil ditambahkan');
    }
    
    
    public function TampilData($id){
        $user = User::find($id);
        // dd($user);
        return view('admin.edituser', compact('user'));
    }
    public function SaveUser(Request $request, $id){
        $user = User::find($id);
        // dd($user);
        $user->update($request->all());
        
        return redirect()->route('listUsers')->with('success','Data berhasil diubah');
    }
    public function DeleteUser($id){
        $user = User::find($id);
        // dd($user);
        $user->delete();
        
        return redirect()->route('listUsers')->with('success','Data berhasil dihapus');
    }
    

}
