<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProdutoController extends BaseController{

  public function index(){
    echo view('header');
    echo view('produtoview');
    echo view('footer');
  }

  public function listarprodutos(){
    //códigos
  }

}