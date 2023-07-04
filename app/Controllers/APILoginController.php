<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\SiswaModel;

class APILoginController extends ResourceController
{
    use ResponseTrait;

    // function __construct()
    // {
    //     $this->SiswaModel = new SiswaModel();
    //     // $this->BeritaModel = new BeritaModel();
    // }

    public function index()
    {
        $SiswaModel = new SiswaModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $akun = $SiswaModel->get_data($email, $password);

        if (is_null($akun)) {
            return $this->respond(['error' => 'Email atau Password salah.'], 401);
        }

        $data = array(
            "code" => 200,
            "message" => 'Login Succesful',
            "no_registrasi" => $akun['no_registrasi'],
            "nama" => $akun['nama'],
            "ttl" => $akun['ttl'],
            "email" => $akun['email'],
            "telpon" => $akun['telpon'],
            "pekerjaan" => $akun['pekerjaan'],
            "alamat" => $akun['alamat'],
            "jenis_kendaraan" => $akun['jenis_kendaraan'],
            "kode_kendaraan" => $akun['kode_kendaraan'],
            "instruktur" => $akun['instruktur'],
            "paket" => $akun['paket'],
            "jadwal" => $akun['jadwal'],
            "status" => $akun['status'],
            "jenis_pembayaran" => $akun['jenis_pembayaran'],
            "jumlah_pembayaran" => $akun['jumlah_pembayaran'],
            "sisa_pembayaran" => $akun['sisa_pembayaran'],
            "kehadiran" => $akun['kehadiran'],
            "qr" => $akun['qr'],
            "created_at" => $akun['created_at'],
            "updated_at" => $akun['updated_at'],
        );

        // $response = [
        //     'code' => 200,
        //     'message' => 'Login Succesful',
        //     'data' => $data,
        // ];
        
        return $this->respond($data, 200);
    }

    // public function create()
    // {
    //     // $data = [
    //     //     'username'=>$this->request->getVar('username'),
    //     //     'password'=>$this->request->getVar('password'),
    //     // ];
    //     $data = $this->request->getPost();
    //     // $this->AkunModel->save($data);
    //     if (!$this->AkunModel->save($data)) {
    //         return $this->fail($this->AkunModel->errors());
    //     }
    //     $response = [
    //         'status' => 200,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'Berhasil masuk'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }

    // public function show($id = null)
    // {
    //     $data = $this->AkunModel->where('id', $id)->findAll();
    //     if ($data) {
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->failNotFound("Data tidak ditemukan untuk id $id");
    //     }
    // }

    // public function update($id = null)
    // {
    //     $data = $this->request->getRawInput();
    //     $data['id'] = $id;
    //     $isExist = $this->AkunModel->where('id', $id)->findAll();
    //     if (!$isExist) {
    //         return $this->failNotFound("Data tidak ditemukan untuk id $id");
    //     }

    //     if (!$this->AkunModel->save($data)) {
    //         return $this->fail($this->AkunModel->errors());
    //     }

    //     $response = [
    //         'status' => 200,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'Data pegawai dengan id $id berhasil diupdate'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }

    // public function delete($id = null)
    // {
    //     $data = $this->AkunModel->where('id', $id)->findAll();
    //     if ($data) {
    //         $this->AkunModel->delete($id);
    //         $response = [
    //             'status' => 200,
    //             'error' => null,
    //             'message' => [
    //                 'success' => 'Data pegawai berhasil dihapus'
    //             ]
    //         ];
    //         return $this->respondDeleted($response);
    //     } else {
    //         return $this->failNotFound('Data tidak ditemukan');
    //     }
    // }

    // public function showBerita($id = null)
    // {
    //     $this->BeritaModel = new BeritaModel();
    //     $data = $this->BeritaModel->where('id', $id)->findAll();
    //     if ($data) {
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->failNotFound("Pengumuman tidak ditemukan");
    //     }
    // }

    // public function createBerita()
    // {
    //     $this->BeritaModel = new BeritaModel();
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
    //             'success' => 'Berita berhasih ditambahkan'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }
}
