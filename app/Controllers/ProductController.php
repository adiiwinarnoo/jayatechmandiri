<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{

    protected $product_model;

    public function __construct()
    {
        $this->product_model = new ProductModel;
    }

    public function index()
    {
        $data['products'] = $this->product_model->get_product();
        return view('dashboard/product', $data);
    }

    public function tambah_product()
    {
        return view('dashboard/tambah_product');
    }

    public function edit_product($id)
    {
        $data['products'] = $this->product_model->get_product_by_id($id);
        return view('dashboard/edit_product', $data);
    }

    public function hapus($id)
    {
        $this->product_model->hapus($id);
        return redirect()->to('dashboard/product')->with('success', 'Produk berhasil dihapus.');
    }

    public function simpan_product()
    {
        $input = $this->request->getPost();
        $img = $this->request->getFiles();

        if (!preg_match('/^[a-zA-Z0-9\s\-]+$/', $input['nama_product'])) {
            return redirect()->back()->with('error', 'Nama produk hanya boleh mengandung huruf dan spasi.');
        }

        if (!preg_match('/^[a-zA-Z0-9\s\-]+$/', $input['nama_product'])) {
            return redirect()->back()->with('error', 'Deskripsi produk hanya boleh mengandung huruf dan spasi.');
        }

        $foto_product = [];

        foreach ($img['files'] as $key => $item) {
            if ($item->isValid()) {
                $fileName = $item->getRandomName();
                $item->move(FCPATH . 'products/', $fileName);
                $foto_product[] = $fileName;
            }
        }

        $nama_product = $input['nama_product'];
        $deskripsi_product = $input['deskripsi'];

        $data = [
            'nama_product' => $nama_product,
            'deskripsi_product' => $deskripsi_product,
            'gambar_product' => $foto_product
        ];

        $this->product_model->simpan($data);
        return redirect()->to('dashboard/product')->with('success', 'Produk berhasil disimpan.');
    }

    public function perbarui_product($id)
    {
        $input = $this->request->getPost();
        $img = $this->request->getFiles();

        if (!preg_match('/^[a-zA-Z0-9\s\-]+$/', $input['nama_product'])) {
            return redirect()->back()->with('error', 'Nama produk hanya boleh mengandung huruf dan spasi.');
        }

        if (!preg_match('/^[a-zA-Z0-9\s\-]+$/', $input['nama_product'])) {
            return redirect()->back()->with('error', 'Deskripsi produk hanya boleh mengandung huruf dan spasi.');
        }

        $foto_product = [];

        if (isset($img['files'])) {
            foreach ($img['files'] as $item) {
                if ($item->isValid()) {
                    $fileName = $item->getRandomName();
                    $item->move(FCPATH . 'products/', $fileName);
                    $foto_product[] = $fileName;
                }
            }
        }

        $nama_product = $input['nama_product'];
        $deskripsi_product = $input['deskripsi'];
        $foto_lama =  $input['gambar_lama'];
        $foto = !empty($foto_product) ? $foto_product : $foto_lama;

        $data = [
            'nama_product' => $nama_product,
            'deskripsi_product' => $deskripsi_product,
            'gambar_product' => $foto
        ];

        $this->product_model->perbarui($id, $data);
        return redirect()->to('dashboard/product')->with('success', 'Produk berhasil di perbarui.');
    }
}
