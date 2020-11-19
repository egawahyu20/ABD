<?php namespace App\Controllers;
use App\Models\Basic_Model;


class Basic extends BaseController
{
	public function between()
	{
        $model = new Basic_Model();
        $data['title'] = "ADB - Between";
        $data['between'] = $model->getProductBetween()->getResult();
        // $data['notBetween'] = $model->getProductNotBetween()->getResult();
		return view('basic/between', $data);
	}

	public function distinct()
	{
        $model = new Basic_Model();
		$data['title'] = "ADB - Distinct";
		$data['employees'] = $model->getEmployeesDistinct()->getResult();
		return view('basic/distinct', $data);
	}

	public function isNull()
	{
        $model = new Basic_Model();
        $data['customerIsNull'] = $model->getCustomerIsNull()->getResult();
        $data['customerIsNotNull'] = $model->getCustomerIsNotNull()->getResult();
		$data['title'] = "ADB - Is Null";
		return view('basic/is_null', $data);
	}

	public function like()
	{
        $model = new Basic_Model();
        $data['title'] = "ADB - Like";
        $data['like1'] = $model->getProductLike1()->getResult();
        $data['like2'] = $model->getProductLike2()->getResult();
		return view('basic/like', $data);
	}

	public function limit()
	{
        $model = new Basic_Model();
        $data['limit1'] = $model->getCustomerLimitDesc()->getResult();
        $data['limit2'] = $model->getCustomerLimitAsc()->getResult();
		$data['title'] = "ADB - Limit";
		return view('basic/limit', $data);
    }

    public function Operator()
	{
        $model = new Basic_Model();
		$data['title'] = "ADB - Operator";
        $data['customerAND'] = $model->getCustomerAnd()->getResult();
        $data['customerOR'] = $model->getCustomerOr()->getResult();
        $data['customerIN'] = $model->getCustomerIn()->getResult();
		return view('basic/operator', $data);
	}

	public function where()
	{
        $model = new Basic_Model();
		$data['title'] = "ADB - Where";
		$data['employees'] = $model->getEmployeesWhere()->getResult();
		return view('basic/where', $data);
	}

}
