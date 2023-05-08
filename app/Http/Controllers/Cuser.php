<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Cuser extends Controller
{
    public function connect_users(Request $req){
        $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        
        $name =request('name');
        $password = request('password');
        $id=User::login($name,$password);
        if($id==-1){
            return redirect('users/login')->withErrors([ 'error'=>'check username or password'])->withInput();
        }
        $req->session()->put('idUser',$id);
        return redirect('/listes-article-AI');
    }
    public function logout_users(Request $req){
        $req->session()->flush();
        return redirect('users/login');
    }
}
