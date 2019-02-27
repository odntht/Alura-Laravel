<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {
	public function lista() {
		$html = 'LISTAGEM DE PRODUTOS';
		$produtos = DB::select ( 'select * from produtos' );
		foreach ( $produtos as $p ) {
			$html .= "<br/> Nome: " . $p->nome;
		}
		return $html;
	}
}