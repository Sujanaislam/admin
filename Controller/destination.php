<?php

Class Destination extends Controller 
{
	function index()
	{
		$data['page_title'] = "Destination";
		$this->view("cse470Project/destination",$data);
	}

	
}