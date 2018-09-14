<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Support\Facades\DB;
use Request;
//use estoque\Produto;


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
        $produtos = Produto::all();

        return view('produto.listagem')->with('produtos', $produtos);
    }// end lista()


    /**
     * Metodo mostra().
     * @param $id
     * @return $this|string
     */
    public function mostra($id) {
        // faz um select
        $resposta = Produto::find($id);

        // se nao existir o produto mostra essa mensagem
        if(empty($resposta)) {
            return "<h2>Esse produto não existe</h2>";
        }// end if

        return view('produto.detalhes')->with('p', $resposta);
    }// end mostra()


    /**
     * Metodo novo().
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function novo() {
        return view('produto.formulario');
    }// end novo()


    /**
     * Metodo adiciona().
     * @return $this
     */
    public function adiciona() {
        // pegar dados do formulario
        $params = Request::all();

        // cria e coloca no BD
        Produto::create($params);

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }// end adiciona()


    /**
     * Metodo listaJson().
     * @return array
     */
    public function listaJson() {
        $produtos = Produto::all();

        return response()->json($produtos);
    }// end listaJson()
}// end class
