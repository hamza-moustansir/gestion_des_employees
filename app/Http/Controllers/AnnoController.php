<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annoncement;

class AnnoController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    //___________________________________________________________________________________________________
    public function index()
    {
        $listaannonce=Annoncement::all();
         return view('adminempl.aannonce',["aannonces"=>$listaannonce]);
    }
    //________________________________________________________________________________________
    public function indexx()
    {
        $listannonce=Annoncement::all();
         return view('empl.annonce',["annonces"=>$listannonce]);
    }
    //________________________________________________________________________________________
    public function create()
    {
        return view("adminempl.caannonce");
    }
    //________________________________________________________________________________________
    public function store(Request $request)
    {
        $annonce=new Annoncement();
        $annonce->titre= $request->input("titre");
        $annonce->contenu= $request->input("contenu");

        $annonce->save();
        session()->flash("success","l'annonce été bien ajouté!!");
        return redirect('aannonce');
    }
    //________________________________________________________________________________________
    public function show(string $id)
    {
        //
    }
    //________________________________________________________________________________________
    public function edit(string $id)
    {
        $aannonce=Annoncement::find($id);
        return view("adminempl.eaannonce",['aannonce'=>$aannonce]);
    }
   //________________________________________________________________________________________
    public function update(Request $request, string $id)
    {
        $aannonce=Annoncement::find($id);
        $aannonce->titre= $request->input("titre");
        $aannonce->contenu= $request->input("contenu");

        $aannonce->save();
        return redirect("aannonce");
    }
    //________________________________________________________________________________________
    public function destroy(Request $request,$id)
    {
        $aannonce=Annoncement::find($id);
        $aannonce->DELETE();
        return redirect("aannonce");
    }
}
