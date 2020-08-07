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
	<h2 class="py-3">Update User</h2>
	<hr>
	<form method="post" action="<?php echo base_url('index.php/User/edit/').$user['id'] ?>">
		<div class="row py-3">
			<div class="col-md-6">
				<div class="form-group">
					<label for="email">Email :</label>
					<input type="text" name="email" value="<?php echo set_value('email', $user['email'])?>" class="form-control">
					<?php echo form_error('email')?>
				</div>
				<div class="form-group">
					<label for="user_name">User Name :</label>
					<input type="text" name="user_name" value="<?php echo set_value('user_name', $user['user_name'])?>" class="form-control">
					<?php echo form_error('user_name')?>
				</div>
				<div class="form-group">
					<label for="account">Account :</label>
					<input type="text" name="account" value="<?php echo set_value('account', $user['account'])?>" class="form-control">
					<?php echo form_error('account')?>
				</div>
				<button class="btn btn-primary">Create</button>
				<a href="" class="btn btn-danger">Cancel</a>
			</div>
		</div>
	</form>
</div>

</body>
</html>

