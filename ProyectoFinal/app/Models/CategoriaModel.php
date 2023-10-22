<?php


namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = 'Categoria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'descripcion'];
}