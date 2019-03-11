<?php 


if (isset($_GET["Name"])&& isset($_GET["Age"])&& isset($_GET["Weight"]) ) {
	if (!empty($_GET["Name"])&& (!empty($_GET["Age"]))&& (!empty($_GET["Weight"]))) {
		echo 'Name:'. $_GET["Name"] . '<br>';
        echo 'Age:'. $_GET["Age"] . '<br>';
        echo 'Weight'. $_GET["Weight"] . '<br>';

	}

	else{
		echo "please fill it correctly";
	}
}

 ?>  
