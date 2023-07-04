<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\AkunModel;
use App\Models\BeritaModel;

class APIAkunController extends BaseController 
{
    use ResponseTrait;
    function __construct()
    {
        $this->AkunModel = new AkunModel();
        // $this->BeritaModel = new BeritaModel();
    }

    public function index()
    {

    }

    public function create()
    {
        // $data = [
        //     'username'=>$this->request->getVar('username'),
        //     'password'=>$this->request->getVar('password'),
        // ];
        $data = $this->request->getPost();
        // $this->AkunModel->save($data);
        if(!$this->AkunModel->save($data)) {
            return $this->fail($this->AkunModel->errors());
        }
        $response = [
            'status' => 200,
            'error' => null,
            'message' =>[
                'success' => 'Berhasil masuk'
            ]
        ];
        return $this->respond($response);
    }

    public function show($id = null)
    {
        $data = $this->AkunModel->where('id',$id)->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound("Data tidak ditemukan untuk id $id");
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        $isExist = $this->AkunModel->where('id', $id)->findAll();
        if (!$isExist) {
            return $this->failNotFound("Data tidak ditemukan untuk id $id");
        } 
        
        if(!$this->AkunModel->save($data)){
            return $this->fail($this->AkunModel->errors());
        }

        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Data pegawai dengan id $id berhasil diupdate'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $data = $this->AkunModel->where('id', $id)->findAll();
        if ($data) {
            $this->AkunModel->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success' => 'Data pegawai berhasil dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan');
        }

        
    }

    public function showBerita($id = null)
    {
        $this->BeritaModel = new BeritaModel();
        $data = $this->BeritaModel->where('id', $id)->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->failNotFound("Pengumuman tidak ditemukan");
        }
    }

    public function createBerita()
    {
        $this->BeritaModel = new BeritaModel();
        // $data = [
        //     'username'=>$this->request->getVar('username'),
        //     'password'=>$this->request->getVar('password'),
        // ];
        $data = $this->request->getPost();
        // $this->AkunModel->save($data);
        if (!$this->BeritaModel->save($data)) {
            return $this->fail($this->BeritaModel->errors());
        }
        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Berita berhasih ditambahkan'
            ]
        ];
        return $this->respond($response);
    }
}