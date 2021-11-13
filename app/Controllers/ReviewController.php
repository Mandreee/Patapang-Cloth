<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class ReviewController extends BaseController
{
    protected $review;

    function __construct()
    {
        $this->review = new ReviewModel();
    }

    public function index()
    {
        $data['review'] = $this->review->findAll();
        return view('admin/review/index', $data);
    }

    public function create()
    {
        return view('admin/review/create');
    }

    public function detail()
    {
        return view('admin/review/detail');
    }

    function edit($id)
    {
        $data['review'] = $this->review->find($id);
        return view('admin/review/detail', $data);
    }
    function delete($id)
    {
        $this->review->delete($id);
        session()->setFlashdata('message', 'Delete Data Review Berhasil');
        return redirect()->to('/review');
    }

    public function store()
    {
        if (!$this->validate([
            'nama_pengirim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'message' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->review->insert([
            'nama_pengirim' => $this->request->getVar('nama_pengirim'),
            'email' => $this->request->getVar('email'),
            'title' => $this->request->getVar('title'),
            'message' => $this->request->getVar('message'),
            'rating' => $this->request->getVar('rating'),
            'status' => "active",
        ]);
        session()->setFlashdata('message', 'Tambah Data Review Berhasil');
        return redirect()->to('/review');
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_pengirim' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'message' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->review->update($id, [
            'nama_pengirim' => $this->request->getVar('nama_pengirim'),
            'email' => $this->request->getVar('email'),
            'title' => $this->request->getVar('title'),
            'message' => $this->request->getVar('message'),
            'rating' => $this->request->getVar('rating'),
            'status' => "active",
        ]);
        session()->setFlashdata('message', 'Update Data Review Berhasil');
        return redirect()->to('/review');
    }


}
