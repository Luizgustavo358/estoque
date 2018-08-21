<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

    public function lista() {

        $html = '<h1>Listagem de produtos com Laravel.</h1>';
        $html .= '<ul>';

        $produtos = DB::select('select * from produtos');
        
        foreach($produtos as $p) {
            $html .= '<li> <b>Nome:</b> '. $p->nome .',<br> <b>Descrição:</b> '. $p->descricao .'</li><br>';
        }// end foreach

        $html .= '</ul>';
        
        return $html;
    }// end lista()
}// end class
