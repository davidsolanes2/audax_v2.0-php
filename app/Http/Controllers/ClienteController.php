<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class ClienteController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return view('clientes.index');
	}

	public function save(Request $request) {
		// validamos
		$validate = $this->validate($request, [
			'name' => 'required'
		]);
		
		$cliente = DB::table('clientes')->insert(array(
			'nombre' => $request->input('name'),
 		));

		return redirect()->route('home');
	}


}

