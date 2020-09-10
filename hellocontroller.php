<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    //ini tampilan function index
    public function index ()
    {
        //echo "<h1>Hello World, Dari Controller!!</h1>";
        //$nama= "Adzikry Cahya S";
        //$pelajaran=["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        //return view('hello.index',compact('nama','pelajaran'));
        
        //$nama= "Adzikry Cahya S";
        //$pelajaran=["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        //return view('hello.index',('nama'=>$nama,'pelajaran'=>$pelajaran));
    
        $d['nama']= "Adzikry Cahya S";
        $d['pelajaran']=["PWPB","Algoritma","PemDas","Basis Data","PBO"];
        return view('hello.index',$d);
    }

}