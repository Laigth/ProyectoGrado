<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function listar()
    {
        $model = new ClientesModel();
        $data['clientes'] = $model->findAll();
        $data['title'] = 'Inicio';
        echo view('header');
        echo view('clientes/listar', $data);
        echo view('footer');
    }

    public function create()
    {
        $data['title'] = 'Insertar';
        echo view('header');
        echo view('clientes/create', $data);
        echo view('footer');
    }

    public function store()
    {
        $model = new ClientesModel();
        $session = session();
        $idUsuarios = $session->get('usuario'); // obtén 'usuario' en lugar de 'idUsuarios'

        $data = [
            'idUsuarios' => $idUsuarios,
            'ciNit' => $this->request->getVar('ciNit'),
            'razonSocial'  => $this->request->getVar('razonSocial'),
        ];
        $model->insert($data);
        return redirect()->to(base_url('/ventas'));
    }



    public function editar($id = null)
    {
        $model = new ClientesModel();
        $data['clientes'] = $model->find($id);
        $data['title'] = 'Editar';
        echo view('header');
        echo view('clientes/editar', $data);
        echo view('footer');
    }


    public function update($id = null)
    {
        $model = new ClientesModel();
        $data = [
            'ciNit' => $this->request->getVar('ciNit'),
            'razonSocial'  => $this->request->getVar('razonSocial'),
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('clientes/listar'));
    }

    public function delete($id = null)
    {
        $model = new ClientesModel();
        $model->delete($id);
        return redirect()->to(base_url('clientes/listar'));
    }

    public function logout()
    {
        session()->remove('usuario');
        return redirect()->to(base_url('usuarios/login'));
    }

    public function buscar()
    {
        $model = new ClientesModel();
        $data['clientes'] = []; // inicializa $clientes como un array vacío
        $ciNit = $this->request->getVar('ciNit'); // obtén el CI/NIT del formulario de búsqueda

        if (strlen($ciNit) < 2) {
            $data['message'] = "Por favor, ingrese al menos 2 caracteres para la búsqueda.";
        } else {
            $data['clientes'] = $model->like('ciNit', $ciNit)->findAll(); // busca a los clientes por CI/NIT
            if (empty($data['clientes'])) {
                $data['message'] = "Ingrese un CI/Nit válido o cree un nuevo cliente.";
            }
        }

        $data['title'] = 'Buscar';
        echo view('header');
        echo view('clientes/listar', $data); // muestra los datos del cliente en la tabla
        echo view('footer');
    }
}
