<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>

            $conn = mysqli_connect('localhost', 'root','', 'WT_Final');
			$sql = "delete from users where uname = '$uname'";
			$result = mysqli_query($conn, $sql);
			
</body>
</html>