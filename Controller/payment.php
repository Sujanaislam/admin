<?php

Class Payment extends Controller
{
	function index()
	{
		$data['page_title'] = "Payment";
		$this->view("cse470Project/payment",$data);
	}


}