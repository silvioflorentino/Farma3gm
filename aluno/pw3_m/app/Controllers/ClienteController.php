<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClienteController extends BaseController{

  public function index(){
    echo view('clienteview');
  }

  public function listarclientes(){
    //códigos
  }

}