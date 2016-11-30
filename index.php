<DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<body>
	<title>COFFEE TIME!</title>
	<h2>LETS MAKE SOME COFFEE!!!</h2>

	<form action="" method="post">
		<input type="submit" name="on" value="On" />
		<input type="submit" name="off" value="Off" />
	</form>

<?php
	if(isset($_POST['on'])) {
		system("gpio mode 0 out");
		system("gpio write 0 1");
		echo "COFFEE IS BREWING!";       
	}

	if(isset($_POST['off'])) {
        	system("gpio mode 0 out");
		system("gpio write 0 0");
		echo "COFFE IS NOT BREWING ):";	
	}
?>
</body>  
</html>

