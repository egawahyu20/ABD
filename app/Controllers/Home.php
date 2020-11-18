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

	public function alias()
	{
		$data['title'] = "ADB - Alias";
		return view('lanjutan/alias', $data);
	}

	public function between()
	{
		$data['title'] = "ADB - Between";
		return view('basic/between', $data);
	}

	public function distinct()
	{
		$model = new Basic_Model();
		$data['title'] = "ADB - Distinct";
		$data['employees'] = $model->getEmployeesDistinct()->getResult();
		return view('basic/distinct', $data);
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

	public function isNull()
	{
		$data['title'] = "ADB - Is Null";
		return view('basic/is_null', $data);
	}

	public function join()
	{
		$data['title'] = "ADB - Join";
		return view('lanjutan/join', $data);
	}

	public function like()
	{
		$data['title'] = "ADB - Like";
		return view('basic/like', $data);
	}

	public function limit()
	{
		$data['title'] = "ADB - Limit";
		return view('basic/limit', $data);
	}

	public function rollUp()
	{
		$data['title'] = "ADB - Roll Up";
		return view('lanjutan/roll_up', $data);
	}

	public function where()
	{
		$model = new Basic_Model();
		$data['title'] = "ADB - Where";
		$data['employees'] = $model->getEmployeesWhere()->getResult();
		return view('basic/where', $data);
	}

}
