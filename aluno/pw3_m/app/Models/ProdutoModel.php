<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{
  protected $table = 'tbproduto';
  protected $primaryKey = 'codProduto';
  protected $allowedFields = ['nomeProduto', 'qtdProduto', 'valorProduto'];
  protected $returnType = 'object';
}