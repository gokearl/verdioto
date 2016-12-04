<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Araç Kayıt</title>
</head>
<body>
<center>
	<form class="w3-container" method="post" action="gonder">
		<div>
		<?php
		$this->load->helper("form");
		echo validation_errors();
		// echo form_open(base_url()."/welcome/gonder");
		echo form_label("Dosya No: ", "dosyano");
		$data = array("name" => "dosyano",
					  "id" => "dosyano",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_label("Ad Soyad: ", "adsoyad");
		$data = array("name" => "adsoyad",
					  "id" => "adsoyad",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_label("TC No: ", "tcno");
		$data = array("name" => "tcno",
					  "id" => "tcno",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_label("Marka: ", "marka");
		$data = array("name" => "marka",
					  "id" => "marka",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_label("Tip: ", "tip");
		$data = array("name" => "tip",
					  "id" => "tip",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_label("Model: ", "model");
		$data = array("name" => "model",
					  "id" => "model",
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
		echo form_label("Adres 2: ", "adres2");
		$data = array("name" => "adres2",
					  "id" => "adres2",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_label("Adres 3: ", "adres3");
		$data = array("name" => "adres3",
					  "id" => "adres3",
					  "value" => "");
		echo form_input($data);
		echo "<br/><br/>";
		echo form_submit("submit", "Kaydet!");
		echo form_close();
	?>
		<!-- <label for="dosyano">Dosya No:</label>
		<input type="text" name="dosyano" value=""/><br/><br/>
		<label for="adsoyad">Ad Soyad:</label>
		<input type="text" name="adsoyad" value=""/><br/><br/>
		<label for="tcno">TC No:</label>
		<input type="text" name="tcno" value=""/><br/><br/>
		<label for="marka">Marka:</label>
		<input type="text" name="marka" value=""/><br/><br/>
		<label for="tip">Tip:</label>
		<input type="text" name="tip" value=""/><br/><br/>
		<label for="model">Model:</label>
		<input type="text" name="model" value=""/><br/><br/>
		<label for="telefon">Telefon:</label>
		<input type="text" name="telefon" value=""/><br/><br/>
		<label for="adres">Adres:</label>
		<input type="text" name="adres" value=""/><br/><br/>
		<label for="adres2">Adres 2:</label>
		<input type="text" name="adres2" value=""/><br/><br/>
		<label for="adres3">Adres 3:</label>
		<input type="text" name="adres3" value=""/><br/><br/>
		<input style="margin: 5px 0px;" type="submit" value="Kaydet"/> -->
	</div>
	</form>
</center>
