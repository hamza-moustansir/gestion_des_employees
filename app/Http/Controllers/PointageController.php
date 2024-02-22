<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pointage;

class PointageController extends Controller
{/*
    public function __construct(){
        $this->middleware("auth");
    }
    //___________________________________________________________________________________________________

    public function index()
    {
        $listpoint=Pointage::all();
         return view('adminempl.apoint',["points"=>$listpoint]);
    }
    //________________________________________________________________________________________
    public function create()
    {
        return view("empl.entre");
    }
    //________________________________________________________________________________________
    public function store(Request $request)
    {
        $point=new Pointage();
        $point->status= $request->input("status");
        $point->date= $request->input("date");

        $point->save();
        session()->flash("success","le point été bien enregstré!!");
        return redirect('point');
    }
    //________________________________________________________________________________________
    public function edit(string $id)
    {
        $point=pointage::find($id);
        return view("empl.sortie",['point'=>$point]);
    }
   //________________________________________________________________________________________
    public function update(Request $request, string $id)
    {
        $point=Pointage::find($id);
        $point->status= $request->input("status");
        $point->date= $request->input("date");

        $point->save();
        return redirect("point");
    }
    public function pointage()
    {
        $listpoint=Pointage::all();
         return view('empl.point',["points"=>$listpoint]);
        //return view("empl.point");
    }*/
}
