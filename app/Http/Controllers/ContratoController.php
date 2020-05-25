<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contrato;

class ContratoController extends Controller
{
  	public function contratos() {
    	return view('contratos.contratos');
  	}

	public function save(Request $request) {
		$validate = $this->validate($request, [
			'name' => 'required'
		]);

		$contrato = DB::table('contratos')->insert(array(
			'tipo' => $request->input('name'),
		));

		return redirect()->route('home');
	}  

}
