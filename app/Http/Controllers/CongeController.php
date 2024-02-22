<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conge;

class CongeController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    //___________________________________________________________________________________________________
    public function index()
    {
        $listconge=Conge::all();
         return view('adminempl.aconge',["conges"=>$listconge]);
    }
    //________________________________________________________________________________________
    public function indexx()
    {
        $listconge=Conge::all();
         return view('empl.conge',["conges"=>$listconge]);
    }
    //________________________________________________________________________________________
    public function create()
    {
        return view("empl.demande");
    }
    //________________________________________________________________________________________
    public function store(Request $request)
    {
        $conge=new Conge();
        $conge->nom= $request->input("nom");
        $conge->prenom= $request->input("prenom");
        $conge->type= $request->input("type");
        $conge->nombre= $request->input("nombre");
        $conge->dubet= $request->input("debut");
        $conge->fin= $request->input("fin");

        $conge->save();
        session()->flash("success","la demande été bien envoyé!!");
        return redirect('conge');
    }
    //________________________________________________________________________________________
    public function show(string $id)
    {
        //
    }
    //________________________________________________________________________________________
    public function edit(string $id)
    {
       $conge=Conge::find($id);
        return view("adminempl.reponse",['conge'=>$conge]);
    }
    //________________________________________________________________________________________
    public function update(Request $request, string $id)
    {
       $conge=Conge::find($id);
        $conge->status= $request->input("status");

        $conge->save();
        return redirect("aconge");
    }
    //________________________________________________________________________________________
    public function destroy(string $id)
    {
        //
    }
}


