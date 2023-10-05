<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
        $model = new ProductosModel();
        $data['productos'] = $model->where('Estado', 1)->findAll();
        $data['productos_deshabilitados'] = $model->where('Estado', 0)->findAll();
        $data['title'] = 'Inicio';
        return view('productos/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Insertar';
        return view('productos/create', $data);
    }

    public function store()
    {
        $model = new ProductosModel();
        $data = [
            'Nombre' => $this->request->getVar('Nombre'),
            'Precio'  => $this->request->getVar('Precio'),
            'Cantidad' => $this->request->getVar('Cantidad'),
            'Estado' => 1, // Establece el estado como activo (1)
        ];
        $model->insert($data);
        return redirect()->to(base_url());
    }

    public function edit($id = null)
    {
        $model = new ProductosModel();
        $data['producto'] = $model->find($id);
        $data['title'] = 'Editar';
        return view('productos/edit', $data);
    }

    public function update($id = null)
    {
        $model = new ProductosModel();
        $data = [
            'Nombre' => $this->request->getVar('Nombre'),
            'Precio'  => $this->request->getVar('Precio'),
            'Cantidad' => $this->request->getVar('Cantidad'),
        ];
        $model->update($id, $data);
        return redirect()->to(base_url());
    }

    public function disable($id = null)
    {
        $model = new ProductosModel();
        $data = [
            'Estado' => 0, // Establece el estado como deshabilitado (0)
        ];
        $model->update($id, $data);
        return redirect()->to(base_url());
    }

    public function enable($id = null)
    {
        $model = new ProductosModel();
        $data = [
            'Estado' => 1, // Establece el estado como activo (1)
        ];
        $model->update($id, $data);
        return redirect()->to(base_url());
    }

    public function delete($id = null)
    {
        $model = new ProductosModel();
        $model->delete($id);
        return redirect()->to(base_url());
    }

    public function logout()
    {
        session()->remove('usuario');
        return redirect()->to(base_url('usuarios/login'));
    }
}






/* public function store()
{
    $validation = \Config\Services::validation();
    $validation->setRules([
        'Nombre' => 'required',
        'Precio' => 'required|numeric',
    ]);
    
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }
    
    $model = new ProductosModel();
    $data = [
        'Nombre' => $this->request->getVar('Nombre'),
        'Precio'  => $this->request->getVar('Precio'),
    ];
    $model->insert($data);
    return redirect()->to('/productos');
}

public function update($id = null)
{
    $validation = \Config\Services::validation();
    $validation->setRules([
        'Nombre' => 'required',
        'Precio' => 'required|numeric',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $model = new ProductosModel();
    $data = [
        'Nombre' => $this->request->getVar('Nombre'),
        'Precio'  => $this->request->getVar('Precio'),
    ];
    $model->update($id, $data);
    return redirect()->to('/productos');
} */