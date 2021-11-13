<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\InventoryImage;
use App\Models\InventoryModel;
use CodeIgniter\Entity;

class InventoryController extends BaseController
{
    protected $inventory;

    function __construct()
    {
        $this->inventory = new InventoryModel();
    }

    public function index()
    {
        $data['inventory'] = $this->inventory->findAll();
        return view('admin/inventory/index', $data);
    }

    public function create()
    {
        return view('admin/inventory/create');
    }

    function edit($id)
    {
        $data['inventory'] = $this->inventory->find($id);
        return view('admin/inventory/detail', $data);
    }
    function delete($id)
    {
        $this->inventory->delete($id);
        session()->setFlashdata('message', 'Delete Data Inventory Berhasil');
        return redirect()->to('/inventory');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        if (! $file->isValid()) {
            session()->setFlashdata('message', 'Tambah Data Inventory Gagal');
        }
        $inventory = new InventoryModel();
        $save = new InventoryImage();

        $data = $this->request->getPost();
        $save->fill($data);
        $save->gambar = $this->request->getFile('gambar');
        $save->status = 'on stock';

        $inventory->save($save);

        session()->setFlashdata('message', 'Tambah Data Inventory Berhasil');
        return redirect()->to('/inventory');
    }

    public function update($id)
    {

        $inventory = new InventoryModel();
        $data = $this->request->getPost();
        if ($this->request->getPost()){

            $b = new InventoryImage();
            $b->id = $id;
            $b->fill($data);

            if($this->request->getFile('gambar')->isValid()){
                $b->gambar = $this->request->getFile('gambar');
            }

            $inventory->save($b);
        }

//        $this->inventory->update($id, [
//            'nama_barang' => $this->request->getVar('nama_barang'),
//            'warna' => $this->request->getVar('warna'),
//            'modal' => $this->request->getVar('modal'),
//            'harga' => $this->request->getVar('harga'),
//            's' => $this->request->getVar('s'),
//            'm' => $this->request->getVar('m'),
//            'l' => $this->request->getVar('l'),
//            'xl' => $this->request->getVar('xl'),
//            'status' => $this->request->getVar('status'),
//        ]);
        session()->setFlashdata('message', 'Update Data Inventory Berhasil');
        return redirect()->to('/inventory');
    }


}
