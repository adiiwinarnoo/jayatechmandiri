<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'nama_product', 'deskripsi_product', 'gambar_product', 'created_at'];


    public function simpan($data)
    {
        $builder = $this->db->table('products');
        $builder->insert($data);
        return $this->db->insertID();
    }

    public function perbarui($id, $data)
    {
        $builder = $this->db->table('products');
        $builder->set($data);
        $builder->where('id', $id);
        return $builder->update();
    }

    public function get_product()
    {
        $builder = $this->db->table('products');
        $builder->select('products.*');
        return $builder->get()->getResult();
    }

    public function get_product_by_id($id)
    {
        $builder = $this->db->table('products');
        $builder->select('products.*');
        $builder->where('id', $id);
        $result = $builder->get()->getRow();
        return $builder->get()->getRow();
    }

    public function hapus($id)
    {
        $builder = $this->db->table('products');
        $builder->where('id', $id);
        return $builder->delete();
    }

    public function get_current_product()
    {
        $builder = $this->db->table('products');
        $builder->select('products.*');
        return $builder->countAll();
    }
}
