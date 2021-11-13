<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InventoryModel;
use CodeIgniter\Model;

class HomeController extends BaseController
{
    protected $inventory;

    function __construct()
    {
        $this->inventory = new InventoryModel();
    }

    public function home()
    {
        return view('user/index');
    }

    public function product()
    {
        $data['inventory'] = $this->inventory->findAll();
        return view('user/product', $data);
    }

    public function about()
    {
        return view('user/about');
    }

    public function contact()
    {
        return view('user/contact');
    }
}
