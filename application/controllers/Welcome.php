<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		// tampilan view dari (view/bimo.php)
		$this->load->view('bimo');
		// kalau ini diaktifkan akan menampilkan langsung dari controler
		// echo "Perkenalkan semuanya, nama saya Dzul Faqor Bimo Arijanto";
	}
}
