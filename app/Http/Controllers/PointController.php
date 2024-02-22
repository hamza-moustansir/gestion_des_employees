<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Point;

class PointController extends Controller
{
    /*public function __construct(){
        $this->middleware("auth");
    }
    //___________________________________________________________________________________________________

    public function index()
    {
        $listpoint=Point::all();
         return view('adminempl.apoint',["points"=>$listpoint]);
    }
    //________________________________________________________________________________________
    public function create()
    {
        return view("empl.point");
    }
    //________________________________________________________________________________________
    public function store(Request $request)
    {
        $point=new Point();
        $point->date= $request->input("date");
        $point->mentre= $request->input("mentre");
        $point->msortie= $request->input("msortie");
        $point->mabsence= $request->input("mabsence");
        $point->sentre= $request->input("sentre");
        $point->ssortie= $request->input("ssortie");
        $point->sabsence= $request->input("sabsence");
        $point->totale= $request->input("totale");
        $point->supp= $request->input("supp");

        $point->save();
        session()->flash("success","le point été bien enregstré!!");
        return redirect('point');
    }
    //________________________________________________________________________________________
    /*public function show($id)
    {
       //$listpoint=point::find($id);
        return view('adminempl.show',["point"=>$id]);
    }*/
    //________________________________________________________________________________________
    /*public function info($id)
    {
       $listpoint=point::find($id);
        return view('empl.information',["point"=>$listpoint]);
    }*/
    //________________________________________________________________________________________
    /*public function edit(string $id)
    {
        $point=point::find($id);
        return view("adminempl.edit",['point'=>$point]);
    }*/
   //________________________________________________________________________________________
   /* public function update(Request $request, string $id)
    {
        $point=Point::find($id);
        $point->nom= $request->input("nom");
        $point->prenom= $request->input("prenom");
        $point->email= $request->input("email");
        $point->numero= $request->input("numero");
        $point->departement= $request->input("departement");
        $point->salaire= $request->input("salaire");

        $point->save();
        return redirect("list");
    }*/
    //________________________________________________________________________________________
    /*public function destroy(Request $request,$id)
    {
        $point=Point::find($id);
        $point->DELETE();
        return redirect("list");
    }*/
}
