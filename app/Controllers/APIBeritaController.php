<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\BeritaModel;

class APIBeritaController extends BaseController
{
    use ResponseTrait;
    function __construct()
    {
        $this->BeritaModel = new BeritaModel();
        // $this->BeritaModel = new BeritaModel();
    }

    public function index()
    {
        echo ("hello");
    }

    // public function show()
    // {
    //     echo ("hello");
    // }

    // public function show($id = null)
    // {
    //     $data = $this->BeritaModel->where('id', $id)->findAll();
    //     if ($data) {
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->failNotFound("Berita tidak ditemukan");
    //     }
    // }

    // public function create()
    // {
    //     // $data = [
    //     //     'username'=>$this->request->getVar('username'),
    //     //     'password'=>$this->request->getVar('password'),
    //     // ];
    //     $data = $this->request->getPost();
    //     // $this->AkunModel->save($data);
    //     if (!$this->BeritaModel->save($data)) {
    //         return $this->fail($this->BeritaModel->errors());
    //     }
    //     $response = [
    //         'status' => 200,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'Berita berhasil ditambahkan'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }
}
