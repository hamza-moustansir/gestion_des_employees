<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reunion;

class ReuinController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    //___________________________________________________________________________________________________
    public function index()
    {
        $listreunion=Reunion::all();
         return view('adminempl.r.areunion',["reunions"=>$listreunion]);
    }
    //________________________________________________________________________________________
    public function indexx()
    {
        $listreunion=Reunion::all();
         return view('empl.reunion',["reunions"=>$listreunion]);
    }
    //________________________________________________________________________________________
    public function create()
    {
        return view("adminempl.r.creunion");
    }
    //________________________________________________________________________________________
    public function store(Request $request)
    {
        $areunion=new Reunion();
        $areunion->titre= $request->input("titre");
        $areunion->type= $request->input("type");
        $areunion->date= $request->input("date");
        $areunion->heure= $request->input("heure");

        $areunion->save();
        session()->flash("success","reunion été bien ajouté!!");
        return redirect('areunion');
    }
    //________________________________________________________________________________________
    public function show(string $id)
    {
        //
    }
    //________________________________________________________________________________________
    public function edit(string $id)
    {
        $areunion=Reunion::find($id);
        return view("adminempl.r.ereunion",['areunion'=>$areunion]);
    }
   //________________________________________________________________________________________
    public function update(Request $request, string $id)
    {
        $areunion=Reunion::find($id);
        $areunion->titre= $request->input("titre");
        $areunion->type= $request->input("type");
        $areunion->date= $request->input("date");
        $areunion->heure= $request->input("heure");

        $areunion->save();
        return redirect("areunion");
    }
    //________________________________________________________________________________________
    public function destroy(Request $request,$id)
    {
        $areunion=Reunion::find($id);
        $areunion->DELETE();
        return redirect("areunion");
    }
}
