	<?php
		$title = 'Home page';
		require_once('header.php');

		$_SESSION['users'] = [
			['id'=>1, 'name'=>'Shethil', 'email'=>'shethil@gmail.com', 'dept'=>'CSE'],
			['id'=>2, 'name'=>'Sakib', 'email'=>'sakib@gmail.com', 'dept'=>'CSE'],
			['id'=>3, 'name'=>'Tamim', 'email'=>'tamim@gmail.com', 'dept'=>'CS'],
			['id'=>4, 'name'=>'Messi', 'email'=>'messi@gmail.com', 'dept'=>'SE']
		];

	?>

	<h1>Welcome home! <?=$_SESSION['username']?> </h1>

	<nav>
		<a href="create.php">Create User</a> |
		<a href="view_users.php">View Users</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>

	<br>
	<br>
	<br>

	<div>
		
	</div>

<?php include('footer.php'); ?>