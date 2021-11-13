<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    protected $admin;

    function __construct()
    {
        $this->admin = new AdminModel();
    }

    public function index()
    {
        $data['admin'] = $this->admin->findAll();
        return view('admin/data/index', $data);
    }

    public function create()
    {
        return view('admin/data/create');
    }

    function edit($id)
    {
        $data['admin'] = $this->admin->find($id);
        return view('admin/data/detail', $data);
    }
    function delete($id)
    {
        $this->admin->delete($id);
        session()->setFlashdata('message', 'Delete Data Admin Berhasil');
        return redirect()->to('/admin');
    }

    public function store()
    {
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'dob' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'contact' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'password_hash' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->admin->insert([
            'fullname' => $this->request->getVar('fullname'),
            'address' => $this->request->getVar('address'),
            'dob' => $this->request->getVar('dob'),
            'contact' => $this->request->getVar('contact'),
            'email' => $this->request->getVar('email'),
            'password_hash'  => password_hash($this->request->getVar('password_hash'), PASSWORD_DEFAULT),

            'id_role' => "1",
            'status' => "active",
        ]);
        session()->setFlashdata('message', 'Tambah Data Admin Berhasil');
        return redirect()->to('/admin');
    }

    public function update($id)
    {
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'dob' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'contact' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->admin->update($id, [
            'fullname' => $this->request->getVar('fullname'),
            'address' => $this->request->getVar('address'),
            'dob' => $this->request->getVar('dob'),
            'contact' => $this->request->getVar('contact'),
            'foto_diri' => $this->request->getVar('foto_diri'),
            'foto_ktp' => $this->request->getVar('foto_ktp'),
            'email' => $this->request->getVar('email'),
            'status' => $this->request->getVar('status'),
        ]);
        session()->setFlashdata('message', 'Update Data Admin Berhasil');
        return redirect()->to('/admin');
    }
}
