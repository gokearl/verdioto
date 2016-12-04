<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Araç Sorgu</title>
</head>
<body>
	<center>
		<h2>Araç Sorgula</h2>
		<div class="w3-dropdown-click w3-center">
		  <button id="drpdwn" onclick="dropDown()" class="w3-btn w3-blue">Sorgu Kriteri</button>
		  <div id="kriter" class="w3-dropdown-content w3-animate-zoom">
		    <input type="button" name="secim" value="Dosya No" onclick="secim('Dosya No')">
		    <input type="button" name="secim" value="TC No" onclick="secim('TC No ')">
		    <input type="button" name="secim" value="Ad Soyad" onclick="secim('Ad Soyad')">
		  </div>
	  </div>
		<!-- <label>First Name</label> -->
		<br/><br/>
		<form class="w3-container" method="post" action="search">
		<input class="w3-input" type="text">
		<input type="hidden" id="hidden" name="criterion" id="orgId"/>
		<input type="button" name="submit" value="Ara">
		</form>
	</center>
	<script>
	function dropDown() {
	    var x = document.getElementById("kriter");
	    if (x.className.indexOf("w3-show") == -1) {
	        x.className += " w3-show";
	    } else {
	        x.className = x.className.replace(" w3-show", "");
	    }
	}

	function secim(field) {
		var x = document.getElementById("kriter");
		document.getElementById("hidden").value = field;
		document.getElementById("drpdwn").innerHTML = field;
		x.className = x.className.replace(" w3-show", "");
	}
	</script>
</body>
</html>
