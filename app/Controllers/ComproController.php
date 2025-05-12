<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class ComproController extends BaseController
{
    protected $product_model;

    public function __construct()
    {
        $this->product_model = new ProductModel;
    }
    public function index()
    {
        $data['products'] = $this->product_model->get_product();
        return view('index', $data); // penting: kirimkan $data
    }
}
