<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<body>
		<?php 
			if (isset($_COOKIE ['nombre'])){
				echo 'la cookie contiene: ';
				echo $_COOKIE['nombre'];
			}
			else {
				echo "no esta seteada la cookie";
			}
		?>
	</body>
</head>
</html>