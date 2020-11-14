<?php namespace App\Controllers;

class No_3 extends BaseController
{
	public function show()
	{
		echo view('TemplateAdmin/Template/header');
		echo view('TemplateAdmin/Template/sidebar');
        echo view('TemplateAdmin/Template/footer_charts');
        echo view('TemplateAdmin/Charts');
	
	}
	//--------------------------------------------------------------------

}