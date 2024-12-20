<?php

namespace App\Http\Controllers;

use App\Models\Cellphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CellphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cp = Cellphone::all();
        return view('cellphones.index',['cell'=>$cp]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cellphones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request ->validate([
            'model'=>'required',
            'manufacturer'=>'required',
            'price'=>'required'
        ]);
        // $cellphone = DB::table('cellphones')->insert($data);
        $entry = Cellphone::create($data);
        return redirect(route('cellphones.index'));
    }

    /**git
     * Display the specified resource.
     */
    public function show(Cellphone $cellphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cellphone $cellphone)
    {
        // dd($cellphone->all());
        return view('cellphones.edit',['data'=>$cellphone]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cellphone $cellphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cellphone $cellphone)
    {
        //
    }
}
