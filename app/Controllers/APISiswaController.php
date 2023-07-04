<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\SiswaModel;

class APISiswaController extends BaseController
{
    use ResponseTrait;
    function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        // $this->SiswaModel = new SiswaModel();
    }

    public function index()
    {
    }

    public function show($no_registrasi = null)
    {
        $data = $this->SiswaModel->where('no_registrasi', $no_registrasi)->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound("Data Siswa tidak ditemukan");
        }
    }

    public function create()
    {
        // $data = [
        //     'username'=>$this->request->getVar('username'),
        //     'password'=>$this->request->getVar('password'),
        // ];
        $data = $this->request->getPost();
        // $this->AkunModel->save($data);
        if (!$this->SiswaModel->save($data)) {
            return $this->fail($this->SiswaModel->errors());
        }
        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Data Siswa berhasil ditambahkan'
            ]
        ];
        return $this->respond($response);
    }
}
