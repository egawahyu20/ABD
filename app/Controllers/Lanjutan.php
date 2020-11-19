<?php namespace App\Controllers;
use App\Models\Lanjutan_Model;

class Lanjutan extends BaseController
{
	public function alias()
	{
		$data['title'] = "ADB - Alias";
		return view('lanjutan/alias', $data);
	}

	public function groupBy()
	{
		$data['title'] = "ADB - Group By";
		return view('lanjutan/group_by', $data);
	}

	public function having()
	{
		$data['title'] = "ADB - Having";
		return view('lanjutan/having', $data);
	}

	public function join()
	{
		$data['title'] = "ADB - Join";
		return view('lanjutan/join', $data);
	}

	public function rollUp()
	{
		$data['title'] = "ADB - Roll Up";
		return view('lanjutan/roll_up', $data);
	}

}
