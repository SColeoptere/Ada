<?php
#var_dump($_POST)
$I_temp = $_POST['libelle'];
echo "La température est de : " .$I_temp . "<br>";

verifTemp($I_temp);

function verifTemp($Temp) {
	if($Temp < 0){
			echo "L'eau est solide";
	} elseif($Temp > 100){
		echo "l'eau est gazeuse";
	}
	else {
		echo "l'eau est liquide";
	}
}
