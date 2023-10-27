<?php


namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table = 'Clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['idUsuarios','ciNit', 'razonSocial'];
}
