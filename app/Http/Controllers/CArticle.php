<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class CArticle extends Controller
{
    public function listArticle(){
        $table = DB::table('aiarticle')
            ->select('aiarticle.id','aiarticle.titre', 'aiarticle.resum','aiarticle.contenu','aiarticle.image','aiarticle.slug')
            ->get();
        return view('ListArticle',['art'=>json_decode(json_encode($table), true)]);
    }

    public function form_Article(Request $req){
        if ($req->session()->has('idUser')) {
            return view('InsertArt');
        }else{return redirect('users/login');}
    }

    public function insert_Article(Request $req){
        if ($req->session()->has('idUser')) {
        $req->validate([
            'titre' => 'required',
            'resum' => 'required'
        ]);
        $imgname='default.jpg';
        if (null !== $req->file('img')) {
            // $imgname=time().'.'.$req->file('img')->getClientOriginalExtension();
            // $req->file('img')->move(public_path('images'),$imgname);$imageTag = '<img src="data:image/png;base64,' . $imageData . '">';
            $imgname = base64_encode(file_get_contents($req->file('img')));
        }
        $art = new Article();
        $art->titre = request('titre');
        $art->resum = request('resum');
        $art->contenu = request('contenu');
        $art->image = $imgname;
        $art->save();
        return redirect('/listes-article-AI');
        }else{return redirect('users/login');}
    }

    public function get_Article(){
        $table = DB::table('aiarticle')
            ->select('aiarticle.id','aiarticle.titre', 'aiarticle.resum','aiarticle.contenu','aiarticle.image','aiarticle.slug')
            ->where('aiarticle.id', '=', request('id') )
            ->get();
        return view('DetailArt',['art'=>json_decode(json_encode($table), true)]);
    }    
}
