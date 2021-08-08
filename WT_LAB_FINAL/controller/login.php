<?php 

	session_start();

if(isset($_POST['submit'])){


		$uname = $_POST['id'];
		$password = $_POST['password'];

		if($id != "" || $password != ""){

			$_SESSION['flag'] = true;
			$_SESSION['name'] = $uname;
			$_SESSION['password'] = $password;

			$conn = mysqli_connect('localhost', 'root','', 'WT_Final');
			$sql = "select * from users where uname = '$uname' and Password = '$password'";
			$result = mysqli_query($conn, $sql);

			
			
	}

	else{
		echo'Null Value Found';
	}

}

else{
		echo'invalid request';
	}

?>