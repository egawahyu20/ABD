<?php namespace App\Controllers;
use App\Models\Basic_Model;
use App\Models\Lanjutan_Model;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Administrasi Basis Data";
		return view('home', $data);
	}

}
