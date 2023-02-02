<?php

namespace App\Controllers;

class Demo extends BaseController
{
	public function __construct()
	{
		helper(['url', 'form']);
	}

	public function index()
	{
		return view('demo/index');
	}

	public function process_login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		if ($username == 'pmk' && $password == 'lab') {
			session()->set('username', $username);
			return $this->response->redirect(site_url('demo/welcome'));
		} else {
			$data['error'] = 'Invalid Account';
			return view('demo/index', $data);
		}
	}

	public function welcome()
	{
		return view('demo/welcome');
	}

	public function logout()
	{
		session()->remove('username');
		return $this->response->redirect(site_url('demo/index'));
	}
}					