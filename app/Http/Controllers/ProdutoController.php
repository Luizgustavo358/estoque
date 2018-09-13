<?php

namespace estoque\Http\Controllers;

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
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        // se nao existir o produto mostra essa mensagem
        if(empty($resposta)) {
            return "<h2>Esse produto não existe</h2>";
        }// end if

        return view('produto.detalhes')->with('produtos', $resposta);
    }// end mostra()


    /**
     * Metodo novo().
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function novo() {
        return view('produto.formulario');
    }// end novo()


    public function adiciona() {
        // pegar dados do formulario
        $nome       = Request::input('nome');
        $descricao  = Request::input('descricao');
        $valor      = Request::input('valor');
        $quantidade = Request::input('quantidade');


        // salvar no banco de dados
        DB::table('produtos')->insert(
            [
                'nome' => $nome,
                'quantidade' => $quantidade,
                'valor' => $valor,
                'descricao' => $descricao
            ]
        );

        return redirect('/produtos')->withInput(Request::only('nome'));
    }// end adiciona()
}// end class
