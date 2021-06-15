<?php
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];

		if($email == ""){
			echo "invalid email!";
		}else{
			echo $email;
		}

	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
  <form method="post" >

  	Email <br> <input type="text" name="email" value="<?php echo $email; ?>" /" > 
  	<br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>