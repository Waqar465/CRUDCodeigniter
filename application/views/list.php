<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CRUD Applications</title>
	<link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>">
</head>
<body>

<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand py-3">
			CRUD Application
		</a>
	</div>
</div>
<div class="container">
	<h2 class="py-3">View User</h2>
	<hr>
	<table class="table table-striped table-hover py-5">
		<tr>
			<th>Email</th>
			<th>User name</th>
			<th>Account</th>
			<th>Operations</th>
		</tr>

		<?php  if (!empty($users)) { foreach ($users as $user) {  ?>
		<tr>
			<td><?php  echo $user['email']; ?> </td>
			<td><?php  echo $user['user_name']; ?></td>
			<td><?php  echo $user['account']; ?></td>
			<td>
				<a href="<?php echo base_url().'index.php/user/edit/'.$user['id']; ?>" class="btn btn-primary">Edit</a>
				<a href="<?php  echo base_url('index.php/User/delete/').$user['id']; ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php } } else { ?>
		<tr>
			<td colspan="3"> No Data Found</td>
		</tr>
		<?php } ?>
	</table>

</div>

</body>
</html>







