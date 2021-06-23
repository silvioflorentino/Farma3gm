<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model{
  protected $table = 'tbfuncionario';
  protected $primaryKey = 'codFuncionario ';
  protected $allowedFields = ['nomeFuncionario', 'telFuncionario', 'emailFuncionario'];
  protected $returnType = 'object';
}