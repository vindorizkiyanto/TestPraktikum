<?php namespace App\Controllers;

class No_2 extends BaseController
{
	public function show()
	{
		echo view('TemplateAdmin/Template/header');
		echo view('TemplateAdmin/Template/sidebar');
        echo view('TemplateAdmin/Template/footer_mailbox');
        echo view('TemplateAdmin/Mailbox');
	
	}
	//--------------------------------------------------------------------

}