<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = "Administrasi Basis Data";
		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
