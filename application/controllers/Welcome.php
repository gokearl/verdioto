<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $em;
	function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em;
	}

	public function index()
	{
		if (!$this->authentication->logged_in()) redirect('auth/login');
    	$data['username'] = $this->authentication->user()->getUserName();
    	$data['last_login'] = $this->authentication->user()->getLastLogin();
		$this->home();
	}

	public function home(){
		$this->load->view('header');
		$this->load->view('anasayfa_view');
		$this->load->view('footer');
	}

	public function arac_kayit()
	{
		$this->load->view('header');
		$this->load->view('kayit_view');
		$this->load->view('footer');
	}

	public function gonder()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules('dosyano', 'Dosya No', 'required');
		$this->form_validation->set_rules('tcno', 'TC No', 'numeric');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view("kayit_view");
			$this->load->view('footer');
		}
		else{
			$arac = new Entity\Arac();
			$arac->setId(uniqid());
			$arac->setDosyaNo($this->input->post("dosyano"));
			$arac->setAdSoyad($this->input->post("adsoyad"));
			$arac->setTelefon($this->input->post("telefon"));
			$arac->setAdres($this->input->post("adres"));
			$arac->setAdres2($this->input->post("adres2"));
			$arac->setAdres3($this->input->post("adres3"));
			$arac->setTcNo($this->input->post("tcno"));
			$arac->setMarka($this->input->post("marka"));
			$arac->setModel($this->input->post("model"));
			$arac->setTip($this->input->post("tip"));
			$this->em->persist($arac);
			$this->em->flush();
			$data['arac'] = $arac;
			$this->load->view('header');
			$this->load->view("kaydedildi", $data);
			$this->load->view('footer');
		}
	}

	public function arac_sorgu()
	{
		// echo $this->input->post('criterion')
		// $qb = $this->doctrine->em->createQueryBuilder();
		// $query = $qb->select('m')
		// 	    ->from('Entity\Musteri','m');
		// $query = $qb->getQuery();
		// //$query = $this->em->createQuery('SELECT m FROM app/application/models/Entity/Musteri m ');
		// $sorgu['musteri'] = $query->getResult();
		$this->load->view('header');
		$this->load->view("sorgu_view");
	}

	public function search()
	{
		var_dump($_POST);
		echo $this->input->post('criterion');
	}
}
