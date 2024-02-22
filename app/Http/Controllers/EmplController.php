<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;

class EmplController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    //___________________________________________________________________________________________________

    public function index()
    {
        $listemploye=Employe::all();
         return view('adminempl.list',["employes"=>$listemploye]);
    }
    //________________________________________________________________________________________
    public function create()
    {
        return view("adminempl.create");
    }
    //________________________________________________________________________________________
    public function store(Request $request)
    {
        $employe=new Employe();
        $employe->nom= $request->input("nom");
        $employe->prenom= $request->input("prenom");
        $employe->email= $request->input("email");
        $employe->numero= $request->input("numero");
        $employe->departement= $request->input("departement");
        $employe->salaire= $request->input("salaire");

        $employe->save();
        session()->flash("success","le employe été bien ajouté!!");
        return redirect('list');
    }
    //________________________________________________________________________________________
    public function show($id)
    {
       //$listemploye=Employe::find($id);
        //return view('adminempl.show',["employe"=>$id]);
    }
    public function info()
    {
        $listemploye=Employe::all();
         return view('adminempl.show',["employes"=>$listemploye]);
    }
    //________________________________________________________________________________________
    /*public function info($id)
    {
       $listemploye=Employe::find($id);
        return view('empl.information',["employe"=>$listemploye]);
    }*/
    //________________________________________________________________________________________
    public function edit(string $id)
    {
        $employe=Employe::find($id);
        return view("adminempl.edit",['employe'=>$employe]);
    }
   //________________________________________________________________________________________
    public function update(Request $request, string $id)
    {
        $employe=Employe::find($id);
        $employe->nom= $request->input("nom");
        $employe->prenom= $request->input("prenom");
        $employe->email= $request->input("email");
        $employe->numero= $request->input("numero");
        $employe->departement= $request->input("departement");
        $employe->salaire= $request->input("salaire");

        $employe->save();
        return redirect("list");
    }
    //________________________________________________________________________________________
    public function destroy(Request $request,$id)
    {
        $employe=Employe::find($id);
        $employe->DELETE();
        return redirect("list");
    }
}
