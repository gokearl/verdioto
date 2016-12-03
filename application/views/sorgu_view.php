<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Müşteri Sorgu</title>
	<style>
	table, th, td {
	     border: 1px solid black;
	}
	</style>
</head>
<body>
	<center>
	<?php 
	echo "<h1>Tüm Müşterilerimiz<br/></h1>";
	//print_r(array_values($musteri));
	echo "<br/>";
	echo "<table>";
	$text =  "<tr><td>"."Ad"."</td><td>"."Soyad"."</td><td>"."Telefon"."</td><td>"."Adres"."</td><td>"."Sipariş"."</td><td>"."Notlar"."</td></tr>"."<br/>";
	print "<strong>".$text."</strong>";
	
	foreach($musteri as $arr){
		echo "<tr><td>".$arr->getName()."</td><td>".$arr->getLastName()."</td><td>".$arr->getTel()."</td><td>".$arr->getAdress()."</td><td>".$arr->getSip()."</td><td>".$arr->getNot()."</td></tr>"."<br/>";
	}
	echo "</table>";
	
	?>
	
	</center>
</body>
</html>
