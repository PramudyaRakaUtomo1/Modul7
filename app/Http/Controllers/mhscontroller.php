<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use Illuminate\Http\Request;

class mhscontroller extends Controller
{
    public function index(){
        $mhs = mhs::all() ;
        return view('mhs.index',compact('mhs'));
    }
    public function create(){
        return view('mhs.create');
    }
    public function store(Request $request){
        mhs::create($request->except(['_token','submit']));
        return redirect('/Home');
    }
    public function edit($id){
        $mhs = mhs::find($id);
        return view('mhs.edit',compact(['mhs']));
    }
    public function update($id,request $request){
        $mhs = mhs::find($id);
        $mhs->update($request->except(['_token','submit']));
        return redirect('/Home');
    }
    public function destroy($id){
        $mhs = mhs::find($id);
        $mhs->delete();
        return redirect('/Home');
    }
    public function about(){
        $title='';

        return view('about',compact('title'));
    }
}
