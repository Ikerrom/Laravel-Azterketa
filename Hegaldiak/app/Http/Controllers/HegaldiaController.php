<?php

namespace App\Http\Controllers;

use App\Models\Hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hegaldia::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hegaldia = Hegaldia::find($id);
        return $hegaldia;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hegaldia = Hegaldia::find($id);
        $hegaldia->delete();
    }

    public function indexweb()
    {
        $hegaldiak = Hegaldia::all();
        return view('hegaldiak.index', ['hegaldiak' => $hegaldiak]);
    }

    public function aldatuhegaldia($id){
        return view('hegaldiak.aldatu_hegaldia', ['hegaldia' => Hegaldia::find($id)]);
    }

    public function aldatuhegaldiadb(Request $request, $id){
        $hegaldia = Hegaldia::find($id);
        
        $hegaldia->i_aireportua = $request->i_aireportua;
        $hegaldia->h_aireportua = $request->h_aireportua;
        $hegaldia->iraupena = $request->iraupena;
        $hegaldia->i_eguna_ordua = $request->i_eguna_ordua;
        $hegaldia->save();

        return redirect()->route('hegaldiak')->with('success', 'Hegaldia updated successfully');
    }
}
