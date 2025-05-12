<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    protected $product_model;

    public function __construct() {
        $this->product_model = new ProductModel;
    }
    public function index()
    {
        $data['dashboard'] = $this->product_model->get_current_product();
        return view('dashboard/index', $data);
    }
}
