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

	}

	public function musteri_kayit()
	{
		$this->load->view('header');
		$this->load->view('kayit_view');


	}

	public function gonder()
	{
		$this->load->library("form_validation");
		//$this->load->model('musteri_model');
		//$this->musteri_model->musteri_ekle($_POST);
		//$this->musteri_model->musteri_ekle();


		$client = new Entity\Musteri();
		$client->setName($this->input->post("ad"));
		$client->setLastname($this->input->post("soyad"));
		$client->setTel($this->input->post("telefon"));
		$client->setAdress($this->input->post("adres"));
		$client->setSip($this->input->post("siparis"));
		$client->setNot($this->input->post("notlar"));
		$this->em->persist($client);
		$this->em->flush();
		$this->load->view("kaydedildi");


		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view("kayit_view");

		}
		else{
			$this->load->view('header');
			$this->load->view("kaydedildi");

		}


	}

	public function musteri_sorgu()
	{
		$qb = $this->doctrine->em->createQueryBuilder();
		$query = $qb->select('m')
			    ->from('Entity\Musteri','m');
		$query = $qb->getQuery();
		//$query = $this->em->createQuery('SELECT m FROM app/application/models/Entity/Musteri m ');
		$sorgu['musteri'] = $query->getResult();
		$this->load->view('header');
		$this->load->view("sorgu_view",$sorgu);


	}


}
