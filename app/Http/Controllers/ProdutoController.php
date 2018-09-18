<?php

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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
        // validacao
        $validator = Validator::make(
            [
                'nome'       => Request::input('nome'),
                'descricao'  => Request::input('descricao'),
                'valor'      => Request::input('valor'),
                'quantidade' => Request::input('quantidade')
            ],
            [
                'nome'       => 'required|min:5',
                'descricao'  => 'required|max:255',
                'valor'      => 'required|numeric',
                'quantidade' => 'required|numeric'
            ]
        );

        if($validator->fails()) {
            return redirect()->action('ProdutoController@novo');
        }// end if

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


    /**
     * Metodo remove().
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($id) {
        // acha o produto
        $produto = Produto::find($id);

        // deleta produto
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }// end remove()


    /**
     * Metodo up().
     * @param $id
     * @return $this
     */
    public function editar($id) {
        // faz um select
        $resposta = Produto::find($id);

        return view('produto.editar')->with('p', $resposta);
    }// end editar()


    /**
     * Metodo atualiza().
     * @return $this
     */
    public function atualizar() {
        // pega os campos
        $id = Request::input('id');

        // busca o produto
        $produto = Produto::find($id);

        // atualiza os campos
        $produto->nome       = Request::input('nome');
        $produto->descricao  = Request::input('descricao');
        $produto->valor      = Request::input('valor');
        $produto->quantidade = Request::input('quantidade');

        // da o commit
        $produto->save();

        return redirect()
            ->action('ProdutoController@editar', $id);
    }// end atualizar()
}// end class
