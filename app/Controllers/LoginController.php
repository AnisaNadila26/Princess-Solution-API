<?php
namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\ValidatorModel;
class LoginController extends BaseController
{
	public function wellcome()
	{
		// echo password_hash('aaninisasa26010', PASSWORD_DEFAULT);
		return view('/users/v_dashboard');
	}

	public function login()
	{
		if (!session()->get('username') == '') {
			return redirect()->to(base_url('/admin'));
		}
        echo view('/admin/v_login');
	}

	public function login_action()
	{
		$admin = new AdminModel();
		$validator = new ValidatorModel();
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		
		$cekadmin = $admin->get_data($username, $password);
		$cekvalidator = $validator->get_data($username, $password);
		if ($cekadmin != null) {
			
				$login = [
					'username' => $username,
				];
				session()->set($login);
				return redirect()->to(base_url('/admin'));
		} 
		else if($cekvalidator != null) {
			$login = [
				'username' => $username,
			];
			session()->set($login);
			return redirect()->to(base_url('/validasisiswa'));
		}
		else {
			session()->setFlashdata('gagal', 'Username/Password salah');
			return redirect()->to(base_url('/login'));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/login'));
	}
}