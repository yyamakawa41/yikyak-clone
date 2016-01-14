<?php include 'inc/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php include('inc/head.php'); ?>
</head>
<body>
	<?php include 'header.php'; ?>

	<div class="container">
		<form action="submit_post.php" method="post">
			<div class="form-group">
				<label for="new-post">POST</label>
				<textarea class="form-control" rows="5" name="newPost" id="new-post"></textarea>
			</div>

			<div class="form-group">
				<input type="submit" value="Post it!" class="btn btn-primary">
			</div>



		</form>
	</div>


	
</body>
</html>