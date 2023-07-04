<?php
namespace App\Models;
use CodeIgniter\Model;

class ValidatorModel extends Model
{
    protected $table                = 'validator';
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['username', 'password', 'nama', 'role'];

    public function get_data($username, $password)
    {
        return $this->db->table('validator')->where(array(
            'username' => $username,
            'password' => $password
        ))->get()->getRowArray();
    }

    public function getData($id)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}


