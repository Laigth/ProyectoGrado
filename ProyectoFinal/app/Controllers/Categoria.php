<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    public function listar()
    {
        $model = new CategoriaModel();
        $data['categoria'] = $model->findAll();
        $data['title'] = 'Inicio';
        echo view('header');
        echo view('categoria/listar', $data);
        echo view('footer');
    }

    public function create()
    {
        $data['title'] = 'Insertar';
        echo view('header');
        echo view('categoria/create', $data);
        echo view('footer');
    }

    public function store()
    {
        $model = new CategoriaModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'descripcion'  => $this->request->getVar('descripcion'),
        ];
        $model->insert($data);
        return redirect()->to(base_url('categoria/listar'));
    }

    public function editar($id = null)
    {
        $model = new CategoriaModel();
        $data['categoria'] = $model->find($id);
        $data['title'] = 'Editar';
        echo view('header');
        echo view('categoria/editar', $data);
        echo view('footer');
    }

    
    public function update($id = null)
    {
        $model = new CategoriaModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'descripcion'  => $this->request->getVar('descripcion'),
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('categoria/listar'));
    }

    public function delete($id = null)
    {
        $model = new CategoriaModel();
        $model->delete($id);
        return redirect()->to(base_url('categoria/listar'));
    }

    public function logout()
    {
        session()->remove('usuario');
        return redirect()->to(base_url('usuarios/login'));
    }
}
