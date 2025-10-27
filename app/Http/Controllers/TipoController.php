<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Tipo;

class TipoController extends Controller
{
    public function index(){
        $tipos = Tipo::all();
        return view('tipos.index', compact('tipos'));
    }
    public function create(){
    //
    }
    public function store(Request $request){
        //
    }
    public function edit($id){
        //
    }
    public function update(Request $request, $id){
        //
    }
    public function destroy($id){
        //
    }
}
