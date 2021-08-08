<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	$conn = mysqli_connect('localhost', 'root','', 'WT_Final');
	$sql = "select * from users where uname = '$uname'";
	$result = mysqli_query($conn, $sql);
</body>
</html>