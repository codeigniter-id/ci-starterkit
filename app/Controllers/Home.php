<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function stisla()
	{
		print_r('sfsf');
		return view('stisla');
	}
}
