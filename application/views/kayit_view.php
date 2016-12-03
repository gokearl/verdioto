<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Müşteri Kayıt</title>
</head>
<body>
<center>
	<?php 
	$this->load->helper("form");

	echo validation_errors();

	echo form_open(base_url()."index.php/welcome/gonder");

	echo form_label("Ad: ", "ad");
	
	$data = array("name" => "ad",
				  "id" => "ad",
				  "value" => "");
	echo form_input($data);

	echo "<br/><br/>";
	
	echo form_label("Soyad: ", "soyad");
	$data = array("name" => "soyad",
				  "id" => "soyad",
				  "value" => "");
	echo form_input($data);
	echo "<br/><br/>";
	
	echo form_label("Telefon: ", "telefon");
	$data = array("name" => "telefon",
				  "id" => "telefon",
				  "value" => "");
	echo form_input($data);
	echo "<br/><br/>";
	
	echo form_label("Adres: ", "adres");
	$data = array("name" => "adres",
				  "id" => "adres",
				  "value" => "");
	echo form_input($data);
	echo "<br/><br/>";
	
	echo form_label("Sipariş: ", "siparis");
	$data = array("name" => "siparis",
				  "id" => "siparis",
				  "value" => "");
	echo form_input($data);
	echo "<br/><br/>";

	echo form_label("Notlar: ", "notlar");
	$data = array("name" => "notlar",
				  "id" => "notlar",
				  "value" => "");
	echo form_input($data);
	echo "<br/><br/>";

	echo form_submit("submit", "Kaydet!");

	echo form_close();

?>
</center>
</body>
</html>