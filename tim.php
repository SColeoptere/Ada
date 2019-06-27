<?php

$I_Temp = $_POST['libelle'];

switch($I_Temp) {
	case $I_Temp > 100 : 
		echo 'gazeux';
		break;
	case $I_Temp < 0 :
		echo 'solide';
		break;
	case $I_Temp > 0 :
			echo 'liquide';
		break;
	default :
		echo 'error';
		break;
}
?>

