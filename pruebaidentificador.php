<?php
	session_start()
?>	
<!DOCTYPE html>
<html>
<head>
	<body>
	<?php
		$identificador = session_id();
	echo 'el identificador de esta session es: ' .  "$identificador;
	?>
	</body>
</head>
</html>
	
	