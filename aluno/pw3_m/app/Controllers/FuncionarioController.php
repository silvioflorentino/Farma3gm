<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FuncionarioController extends BaseController{

  public function index(){
    echo view('funcionarioview');
  }

  public function listarfuncionarios(){
    //códigos
  }

}