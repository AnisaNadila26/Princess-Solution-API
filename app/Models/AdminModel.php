<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table                = 'admin';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['username', 'password', 'nama', 'role'];

    public function get_data($username, $password)
    {
        return $this->db->table('admin')->where(array('username' => $username,
        'password' => $password))->get()->getRowArray();
    }

    public function getData($id)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}

