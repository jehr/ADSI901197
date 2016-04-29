<?php 

if (isset($_GET['marca'])) {
	$marca = $_GET['marca'];
	if ($marca == 1){
		echo"<option> Cr7    </option>";
		echo"<option> Bale   </option>";
		echo"<option> James  </option>";
		echo"<option> Ramos  </option>";
	}
	else if ($marca == 2) {
		echo"<option> Messi  </option>";
		echo"<option> Neymar </option>";
		echo"<option> Suarez </option>";
		echo"<option> Pique  </option>";
	}
	else if ($marca == 3) {
		echo"<option> Torres   </option>";
		echo"<option> Godin    </option>";
		echo"<option> Falcao   </option>";
		echo"<option> Griezman </option>";
	}
}
 ?>