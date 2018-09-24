<?php namespace estoque\Http\Controllers;

//use estoque\Http\Request;
use estoque\Http\Controllers\Controller;

use Request;
use Auth;
use estoque\Produto;

class LoginController extends Controller
{
    /**
     * Metodo login().
     * @return string
     */
    public function login()
    {
        $credenciais = Request::only('email', 'password');

        if(Auth::attempt($credenciais, true)) {
            return "Usuário ". Auth::user()->name ."logado com sucesso";
        }// end if

        return "As credenciais não são válidas";
    }// end login()


    /**
     * Metodo remove().
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function remove($id)
    {
        if(Auth::guest())
        {
            return redirect('/login');
        }// end if

        $produto = Produto::find($id);

        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }// end remove()
}// end class
