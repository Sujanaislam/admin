<?php

Class Home extends Controller
{
	function index()
	{
		$data['page_title'] = "Home";
		$this->view("cse470Project/index",$data);
	}


}