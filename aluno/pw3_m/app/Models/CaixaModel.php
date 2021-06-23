<?php

namespace App\Models;

use CodeIgniter\Model;

class CaixaModel extends Model{
  protected $table = 'tbcaixa';
  protected $primaryKey = 'codCaixa';
  protected $allowedFields = ['codCliente', 'codProduto', 'codFuncionario', 'qtdCaixa', 'qtdTotal'];
  protected $returnType = 'object';
}