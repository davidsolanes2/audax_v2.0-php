<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Cliente;
use App\Contrato;

class ClienteController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		$tipos_contrato = Contrato::all();
		return view('clientes.index', compact('tipos_contrato'));
	}

	public function save(Request $request) {
		// validamos
		$validate = $this->validate($request, [
			'name' => 'required'
		]);
		
		$cliente = DB::table('clientes')->insert(array(
			'nombre' => $request->input('name'),
			'tipo_contrato' => $request->input('tipo')
 		));

		return redirect()->route('home');
	}

	public function listado() {
		$cliente = DB::table('clientes')->get();

		return view('listados.index', [
			'cliente' => $cliente
		]);
	}

}

