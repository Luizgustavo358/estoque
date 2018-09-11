<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;


/**
 * Class ProdutoController
 * @package estoque\Http\Controllers
 */
class ProdutoController extends Controller {

    /**
     * Metodo lista().
     * @return $this
     */
    public function lista() {
        // faz um select e guarda na variavel
        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }// end lista()


    /**
     * Metodo mostra().
     * @param $id
     * @return $this|string
     */
    public function mostra($id) {
        // faz um select
        $resposta = DB::select('select * from produtos where id = ?',[$id]);

        // se nao existir o produto mostra essa mensagem
        if(empty($resposta)) {
            return "<h2>Esse produto não existe</h2>";
        }// end if

        return view('produto.detalhes')->with('produtos', $resposta);
    }// end mostra()
}// end class
