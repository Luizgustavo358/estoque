<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

use estoque\Produto;

class ProdutoController extends Controller {

    public function lista() {
        // faz um select e guarda na variavel
        $produtos = DB::select('select * from produtos');
        
        // armazena em um array
        $data = ['produtos' => $produtos];

        return view('listagem', $data);
    }// end lista()


    public function mostra($id) {
        // faz um select
        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        // se nao existir o produto mostra essa mensagem
        if(empty($resposta)) {
            return "<h2>Esse produto não existe</h2>";
        }// end if

        return view('detalhes')->with('produtos', $resposta[0]);
    }// end mostra()
}// end class
