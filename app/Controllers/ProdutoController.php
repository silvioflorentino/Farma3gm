<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use CodeIgniter\HTTP\Request;

class ProdutoController extends BaseController{

    public function index(){
        
        echo view('header');
        echo view('produtoview');
        echo view('footer');
    }

    public function inserirProduto(){
        $request = service('request');
        $data['msg'] = '';

        if($request->getMethod() === 'post'){
            $produtoModel  = new \App\Models\ProdutoModel();

            $produtoModel->set('nomeProduto', $request->getPost('produto'));
            $produtoModel->set('qtdProduto', $request->getPost('qtd'));
            $produtoModel->set('valorProduto', $request->getPost('valor'));

            if($produtoModel->insert()){
                $data['msg'] = "<div class='alert alert-success' role='alert'> Dados cadastrados com sucesso </div>";
            }else{
                $data['msg'] = "<div class='alert alert-danger' role='alert'> Dados não cadastrados.</div>";
            }
        }
        echo view('header');
        echo view('produtoview',$data);
        echo view('footer');
    }

}