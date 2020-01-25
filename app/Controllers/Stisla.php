<?php 

namespace App\Controllers;

class Stisla extends BaseController
{


	//--------------------------------------------------------------------

	public function index()
	{
		
		return view('Stisla/Layout/Default');
	}

	public function transparentSidebar()
	{
		
		return view('Stisla/Layout/TransparentSidebar');
	}
}
