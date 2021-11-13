<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Home extends BaseController
{
    protected $review;

    function __construct()
    {
        $this->review = new ReviewModel();
    }

    public function index()
    {
        $data['review'] = $this->review->findAll();
        return view('admin/index', $data);
    }

}
