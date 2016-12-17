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
		$this->load->model('Arac_Model');
	}

	public function index()
	{
		mkdir('temp_file', 0777);
		if (!$this->authentication->logged_in()) redirect('auth/login');
    	$data['username'] = $this->authentication->user()->getUserName();
    	$data['last_login'] = $this->authentication->user()->getLastLogin();
		$this->home();
	}

	public function home(){
		if (!$this->authentication->logged_in()) die('Lütfen giriş yapın!');
		$this->load->view('header');
		$this->load->view('anasayfa_view');
		$this->load->view('footer');
	}

	public function arac_kayit()
	{
		if (!$this->authentication->logged_in()) die('Lütfen giriş yapın!');
		$this->load->view('header');
		$this->load->view('kayit_view');
		$this->load->view('footer');
	}

	public function gonder()
	{
		if (!$this->authentication->logged_in()) die('Lütfen giriş yapın!');
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
			$arac->setMusteriNo($this->input->post("musterino"));
			$arac->setIcraDairesi($this->input->post("icradairesi"));
			$arac->setStatu($this->input->post("statu"));
			$arac->setDosyaNo($this->input->post("dosyano"));
			$arac->setAd($this->input->post("ad"));
			$arac->setSoyad($this->input->post("soyad"));
			$arac->setTelefon($this->input->post("telefon"));
			$arac->setImza($this->input->post("imza"));
			$arac->setAdres($this->input->post("adres"));
			$arac->setAdres2($this->input->post("adres2"));
			$arac->setIlIlce($this->input->post("ililce"));
			$arac->setTcNo($this->input->post("tcno"));
			$arac->setMarka($this->input->post("marka"));
			$arac->setModel($this->input->post("model"));
			$arac->setCins($this->input->post("tip"));
			$arac->setPlaka($this->input->post("plaka"));
			$arac->setHacizTarihi($this->input->post("haciztarihi"));
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
		if (!$this->authentication->logged_in()) die('Lütfen giriş yapın!');
		$this->load->view('header');
		$this->load->view("sorgu_view");
	}

	public function search()
	{
		if (!$this->authentication->logged_in()) die('Lütfen giriş yapın!');
		$criterion = $this->input->post('criterion');

		if ($criterion == '') {
			throw new Exception("Lütfen sorgu kriteri seçin!", 1);

		} else {
			// $value = (is_numeric($this->input->post('value')) ? (int)$this->input->post('value') : $this->input->post('value'));
			$value = $this->input->post('value');
			$result = $this->Arac_Model->findByCritOrderByDate($criterion, $value);
			$data['list'] = $result;
			$this->load->view('header');
			$this->load->view("list", $data);
		}
	}

	public function details()
	{
		if (!$this->authentication->logged_in()) die('Lütfen giriş yapın!');
		$id = $this->uri->segment(3);
		$arac = $this->Arac_Model->find($id);
		if ($arac != null) {
			$data['arac'] = $arac;
			$this->load->view('header');
			$this->load->view("details", $data);
			$this->load->view('footer');
		}
	}
}
