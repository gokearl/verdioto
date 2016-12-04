<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Kaydedildi!</title>
</head>
<body>
	<center>
		<?php echo "<br/> <h1>Araç Bilgileri Kaydedildi!</h1>";
		 ?>
		 <form class="w3-container" method="post" action="gonder">
	 		<div>
	 		<?php
	 		$this->load->helper("form");
	 		echo validation_errors();
			?>
	 		<label for="dosyano">Dosya No:</label>
	 		<input type="text" name="dosyano" value="<?php echo set_value('dosyano', $arac->getDosyaNo()); ?>" disabled/><br/><br/>
	 		<label for="adsoyad">Ad Soyad:</label>
	 		<input type="text" name="adsoyad" value="<?php echo set_value('adsoyad', $arac->getAdSoyad()); ?>" disabled/><br/><br/>
	 		<label for="tcno">TC No:</label>
	 		<input type="text" name="tcno" value="<?php echo set_value('tcno', $arac->getTcNo()); ?>" disabled/><br/><br/>
	 		<label for="marka">Marka:</label>
	 		<input type="text" name="marka" value="<?php echo set_value('marka', $arac->getMarka()); ?>" disabled/><br/><br/>
	 		<label for="tip">Tip:</label>
	 		<input type="text" name="tip" value="<?php echo set_value('tip', $arac->getTip()); ?>" disabled/><br/><br/>
	 		<label for="model">Model:</label>
	 		<input type="text" name="model" value="<?php echo set_value('model', $arac->getModel()); ?>" disabled/><br/><br/>
	 		<label for="telefon">Telefon:</label>
	 		<input type="text" name="telefon" value="<?php echo set_value('telefon', $arac->getTelefon()); ?>" disabled/><br/><br/>
	 		<label for="adres">Adres:</label>
	 		<input type="text" name="adres" value="<?php echo set_value('adres', $arac->getAdres()); ?>" disabled/><br/><br/>
	 		<label for="adres2">Adres 2:</label>
	 		<input type="text" name="adres2" value="<?php echo set_value('adres2', $arac->getAdres2()); ?>" disabled/><br/><br/>
	 		<label for="adres3">Adres 3:</label>
	 		<input type="text" name="adres3" value="<?php echo set_value('adres3', $arac->getAdres3()); ?>" disabled/><br/><br/>
			<button class="w3-btn w3-round-xlarge w3-blue">
	            <?php
	                if ($this->authentication->logged_in()){
	                    echo "<a href=\"".base_url()."index.php/welcome/arac_kayit\">Yeni Kayıt</a>";
	                }
	            ?>
	        </button>
	 	</div>
	 	</form>
	</center>
</body>
</html>
