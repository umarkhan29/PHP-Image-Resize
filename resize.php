<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Image Resize</title>
</head>

<body>
	<div>
		
		<?php 	
			require_once('resize.umarkhan'); 
			if(isset($_GET['status']) && ($_GET['status']=="success"))
				echo "Image resized";
		
		?>
		
		<div>
			<form action="" method="POST">
			<input type="text" placeholder="Path to image" name="path" /> <br>
			<input type="number" name="width" placeholder="Width in px" /><br>
			<input type="number" name="height" placeholder="Height in px" /><br>
			<input type="submit" name="btn" value="Resize" />
		</form>
		</div>
	</div>
</body>
</html>


