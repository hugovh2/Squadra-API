<?php

namespace App\Http\Controllers;
use App\Models\UF;
use Illuminate\Http\Request;

class UfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UF::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'codigo_uf' =>  'required',
            'sigla' => 'required',
            'nome' => 'required',
            'status' => 'required',
        ]);
        return UF::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return UF::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = UF::findOrFail($id);
        $pessoa->update($request->all());
        return $pessoa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search($sigla,$nome){
        return UF::where('sigla', 'like', '%'.$sigla.'%')->get();
        return UF::where('nome', 'like', '%'.$nome.'%')->get();
    }
}
