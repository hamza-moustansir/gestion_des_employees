<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pointe;
use DB;

class PointeController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }

    public function index()
    {
        $listpoint=Pointe::all();
         return view('adminempl.apoint',["pointes"=>$listpoint]);
    }

    public function getDate(Request $request){
        $pointes = DB::table('pointes')
                //->whereBetween('created_at', [$request->fdate, $request->sdate])
                ->whereDate('created_at', '=',  [$request->fdate])
                ->get();
  
        return view('adminempl.r.rpoint', ['pointes' => $pointes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
