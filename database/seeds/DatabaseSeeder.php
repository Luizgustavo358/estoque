<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ProdutoTableSeeder');
    }// end run
}// end DatabaseSeeder

class ProdutoTableSeeder extends Seeder 
{
    public function run() 
    {
        // inserindo dados na tabela
        DB::table('produtos')->insert(array(
            array(
                'nome'       => 'Geladeira',
                'quantidade' => 2,
                'valor'      => 59,
                'descricao'  => 'Side by Side com gelo na porta',
            ),
            array(
                'nome'       => 'Fogão',
                'quantidade' => 5,
                'valor'      => 95,
                'descricao'  => 'Painel automático e forno elétrico',
            ),
            array(
                'nome'       => 'Microondas',
                'quantidade' => 1,
                'valor'      => 152,
                'descricao'  => 'Manda SMS quando termina de esquentar',
            ),
        )); 
    }// end run
}// end ProdutoTableSeeder