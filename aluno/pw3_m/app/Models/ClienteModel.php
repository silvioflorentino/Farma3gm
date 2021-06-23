<?php

namespace app\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{
  protected $table = 'tbcliente';
  protected $primaryKey = 'codCliente';
  protected $allowedFields = ['nomeCliente', 'telefoneCliente ', 'emailCliente '];
  protected $returnType = 'object';
}