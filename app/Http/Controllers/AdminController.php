<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminHome(){
        return view('admin.home');
    }
    public function AdminList(){
        return view('admin.adminlist');
    }
    public function AdminEditAdmin(){
        return view('admin.editadmin');
    }
    
    public function AdminEditPesanan(){
        return view('admin.editpesanan');
    }
    public function AdminEditQna(){
        return view('admin.editqna');
    }
    
    public function AdminPesanan(){
        return view('admin.pesanan');
    }
    public function AdminQna(){
        return view('admin.qna');
    }
    public function AdminAddAdmin(){
        return view('admin.tambahadmin');
    }

}
