<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ValidatorModel;
use App\Models\DaftarModel;

class AdminController extends BaseController
{

	public function __construct()
	{
		
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		$this->DaftarModel = new DaftarModel();
	}

	public function admin()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}


		$DaftarModel = new DaftarModel();
		$get_tahun = date('Y');
		$get_bulan = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
		$i = 0;
		foreach ($get_bulan as $bulan) {
			$data_perbulan[$i] = $DaftarModel->like('created_at', $get_tahun . "-" . $bulan)->countAllResults();
			$i++;
		}

		$data = [
			'title' => "Home",
			'hendri' => $DaftarModel->where('instruktur', 'Hendri')->findAll(),
			'suhadi' => $DaftarModel->where('instruktur', 'Suhadi')->findAll(),
			'yono' => $DaftarModel->where('instruktur', 'Yono')->findAll(),
			'eko' => $DaftarModel->where('instruktur', 'Eko')->findAll(),
			'data_perbulan' => json_encode($data_perbulan),
		];
		return view('admin/v_admin', $data);
	}

	public function allMem()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$allMem = $this->DaftarModel->search($keyword);
		} else {
			$allMem = $this->DaftarModel;
		}


		$data = [
			'allMem' => $allMem->findAll(),
		];

		return view('admin/data_kursus/v_allMem', $data);
	}

	public function hendri()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$hendri = $this->DaftarModel->where('instruktur', 'Hendri')->search($keyword);
		} else {
			$hendri = $this->DaftarModel;
		}

		$data = [
			'hendri' => $hendri->where('instruktur', 'Hendri')->findAll(),
		];

		return view('admin/data_kursus/v_hendri', $data);
	}

	public function suhadi()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$suhadi = $this->DaftarModel->where('instruktur', 'Suhadi')->search($keyword);
		} else {
			$suhadi = $this->DaftarModel;
		}

		$data = [
			'suhadi' => $suhadi->where('instruktur', 'Suhadi')->findAll(),
		];

		return view('admin/data_kursus/v_suhadi', $data);
	}

	public function yono()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$yono = $this->DaftarModel->where('instruktur', 'Yono')->search($keyword);
		} else {
			$yono = $this->DaftarModel;
		}

		$data = [
			'yono' => $yono->where('instruktur', 'Yono')->findAll(),
		];

		return view('admin/data_kursus/v_yono', $data);
	}

	public function eko()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$eko = $this->DaftarModel->where('instruktur', 'Eko')->search($keyword);
		} else {
			$eko = $this->DaftarModel;
		}

		$data = [
			'eko' => $eko->where('instruktur', 'Eko')->findAll(),
		];

		return view('admin/data_kursus/v_eko', $data);
	}

	public function notacc()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$rejected = $this->DaftarModel->where('status', 'Tidak Diterima')->search($keyword);
		} else {
			$rejected = $this->DaftarModel;
		}

		$data = [
			'rejected' => $rejected->where('status', 'Tidak Diterima')->findAll(),
		];

		return view('admin/data_kursus/v_notacc', $data);
	}

	public function edit($no_registrasi)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		$daftar_model = new DaftarModel();
		$data = [
			'row' => $this->DaftarModel->getDaftar($no_registrasi),
		];

		if ($no_registrasi == false) {
			$data['daftar'] = $daftar_model->findAll();

			$i = 0;
			foreach ($data['daftar'] as $dt) {
				$data['jadwal_orang'][$i] = $dt['jadwal'];
				$i++;
			}
			return view('/users/v_jadwal', $data);
		} else {
			$data['daftar'] = $daftar_model->getNoReg($no_registrasi);
			$i = 0;
			foreach ($data['daftar'] as $dt) {
				$data['jadwal_orang'][$i] = $dt['jadwal'];
				$i++;
			}
			if (!isset($data['jadwal_orang'])) {
				$data['jadwal_orang'] = null;
			}
		}
		return view("admin/v_edit", $data);
	}

	public function editAdmin($id)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$this->AdminModel = new AdminModel();

		$data = [
			'row' => $this->AdminModel->getData($id),
		];

		return view("admin/v_editadmin", $data);
	}

	public function editValid($id)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$this->ValidatorModel = new ValidatorModel();

		$data = [
			'row' => $this->ValidatorModel->getData($id),
		];

		return view("admin/v_editadmin", $data);
	}

	public function update($no_registrasi, $instruktur)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}
		$DaftarModel = model("DaftarModel");
		$data = $this->request->getPost();
		$transfer = $this->request->getFile('buktiTF');
		$namaTF = $transfer->getName();
		if ($transfer == $namaTF) {
			$namaTF = $this->request->getVar('buktiTFLama');
		} else {
			$namaTF = $transfer->getRandomName();
			$transfer->move('assets/transfer', $namaTF);
			unlink("./assets/transfer/" . $this->request->getVar('buktiTFLama'));
			// $data['buktiTF'] = $namaTF;
		}
		$data = [
			'nama' => $this->request->getVar('nama'),
			'ttl' => $this->request->getVar('ttl'),
			'pekerjaan' => $this->request->getVar('pekerjaan'),
			'alamat' => $this->request->getVar('alamat'),
			'telpon' => $this->request->getVar('telpon'),
			'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
			'kode_kendaraan' => $this->request->getVar('kode_kendaraan'),
			'instruktur' => $this->request->getVar('instruktur'),
			'paket' => $this->request->getVar('paket'),
			'jadwal' => implode('; ', $this->request->getVar('jadwal')),
			'status' => $this->request->getVar('status'),
			'pembayaran' => $this->request->getVar('pembayaran'),
			'harga' => $this->request->getVar('harga'),
			'anTransfer' => $this->request->getVar('anTransfer'),
			'buktiTF' => $namaTF,
			'kehadiran' => $this->request->getVar('kehadiran'),
		];
		if ($data['status'] == "alumni") {
			$data['jadwal'] = "";
		}
		$DaftarModel->update($no_registrasi, $data);
		return redirect()->to(base_url($instruktur));
	}

	public function updateAdmin($id)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$AdminModel = model("AdminModel");
		$data = $this->request->getPost();
		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'nama' => $this->request->getVar('nama'),
			'admin' => $this->request->getVar('admin'),
			'role' => $this->request->getVar('role'),
		];
		$AdminModel->update($id, $data);

		return redirect()->to(base_url('/lihatadmin'));
	}

	public function updateValid($id)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$ValidatorModel = model("ValidatorModel");
		$data = $this->request->getPost();
		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'nama' => $this->request->getVar('nama'),
			'admin' => $this->request->getVar('admin'),
			'role' => $this->request->getVar('role'),
		];
		$ValidatorModel->update($id, $data);

		return redirect()->to(base_url('/lihatadmin'));
	}

	public function delete($no_registrasi, $instruktur)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$row = new DaftarModel();
		$data = $row->find($no_registrasi);
		unlink("./assets/transfer/" . $data['buktiTF']);

		$row->delete($no_registrasi);
		return redirect()->to(base_url($instruktur));
	}

	public function deleteAdmin($id)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$admin = new AdminModel();
		$admin->where(['id' => $id])->delete();
		return redirect()->to(base_url('/lihatadmin'));
	}

	public function deleteValid($id)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$validator = new ValidatorModel();
		$validator->where(['id' => $id])->delete();
		return redirect()->to(base_url('/lihatadmin'));
	}

	public function create()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		return view('admin/v_inputadmin');
	}

	public function store()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'nama' => $this->request->getVar('nama'),
			'admin' => $this->request->getVar('admin'),
			'role' => $this->request->getVar('role'),
		];

		model($data['admin'])->insert($data);
		return redirect()->to(base_url('/lihatadmin'));
	}

	public function lihatadmin()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$AdminModel = new AdminModel();
		$ValidatorModel = new ValidatorModel();

		$data = [
			'admin' => $AdminModel->findAll(),
			'validator' => $ValidatorModel->findAll(),
		];
		return view('admin/v_lihatadmin', $data);
	}

	public function excel()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$siswa = $this->DaftarModel;

		$data = [
			'siswa' => $siswa->where('status', 'siswa')->findAll(),
			'alumni' => $siswa->where('status', 'alumni')->findAll(),
		];

		return view('admin/data_kursus/excel_siswa', $data);
	}

	public function valid()
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$allMem = $this->DaftarModel->search($keyword);
		} else {
			$allMem = $this->DaftarModel;
		}

		$data = [
			'allMem' => $allMem->orderBy('no_registrasi', 'desc')->findAll(),
		];
		return view("admin/v_validator", $data);
	}

	public function accepted($no_registrasi)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'status' => "siswa",
		];
		$where = array('no_registrasi' => $no_registrasi);

		$this->DaftarModel->update($where, $data, 'allMem');
		return redirect()->to(base_url('/validasisiswa'));
	}

	public function rejected($no_registrasi)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$data = [
			'status' => "tidak diterima",
		];
		$where = array('no_registrasi' => $no_registrasi);

		$this->DaftarModel->update($where, $data, 'allMem');
		return redirect()->to(base_url('/validasisiswa'));
	}

	public function lihatjadwal($instruktur)
	{
		if (session()->get('username') == '') {
			session()->setFlashdata('gagal', 'Anda belum login');
			return redirect()->to(base_url('/login'));
		}

		$daftar_model = new DaftarModel();
		$data['daftar'] = $daftar_model->getInstruktur($instruktur);
		$i = 0;
		foreach ($data['daftar'] as $dt) {
			$data['jadwal_orang'][$i] = $dt['jadwal'];
			$i++;
		}
		if (!isset($data['jadwal_orang'])) {
			$data['jadwal_orang'] = null;
		}
		return view('admin/v_lihatjadwal', $data);
	}
}
