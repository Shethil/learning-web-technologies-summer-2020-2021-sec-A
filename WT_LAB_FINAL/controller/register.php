<?php

session_start();


if(isset($_POST['submit'])){


		$ename = $_POST['ename'];
		$company = $_POST['company'];
		$contact = $_POST['contact'];
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		
		

		 
		if($ename           != '' && 
		   $company         != '' && 
		   $contact         != '' && 
		   $uname           != '' && 
		   $password        != '') {
			
		      echo'Signup Successful.......';


		    $conn = mysqli_connect('localhost', 'root', '', 'WT_Final');
			$sql = "insert into users values('$ename', '$company', '$contact', '$uname','$password')"; 
			$result = mysqli_query($conn, $sql);


			header('location: ../view/login.html');

		}

			

			 

			// $file = fopen('../txtFile/users.txt', 'a');
			// fwrite($file, $user);
			// fclose($file);

			// header('location: ../view/u_login.html');


		else{
			echo'Please fill the all imformation properly';
		}
	}
	else{
		echo'invalid request';
	}

?> 