<?php
	include 'inc/db_connect.php';

	if(isset($_POST['userName'])){
        // print $_POST['email'];
        // print $_POST['password'];
        $username = $_POST['userName'];
        $password = $_POST['password'];

        $hashed_password = md5($_POST['password']."yohsuke's little secret");
        // print $hashed_password;
        // exit;
        $username =  $_POST['userName'];

        //USER SUBMITTED SOMETHING.
        //NOW WHAT?
        //Check to see if this user is in the DB!!
        $results = DB::query("SELECT * FROM users 
            WHERE username = '" . $username ."' OR email = '" . $username . "'");

        foreach($results as $result){
            $hash = $result['password'];
            $uid = $result['uid'];
        }
        
        $pass_verify = password_verify($password, $hash);

        if($pass_verify){
            $_SESSION['username'] = $username;
            $_SESSION['uid'] = $uid;
            header('Location: index.php');
            exit;
        }else{
            header('Location: login.php?login=failure');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YikYak Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
	if($_GET['result'] == 'failure'){
		print "<h1>Your login information does not match any record in our system. Please retry or contact Freddy.";
	}
?>
	<div class="container">
		<div class="row">
			<h1 id="signin" class="col-xs-8 col-xs-offset-2" id="login-header">Login</h1>
		</div>
		<form method="post" action="login.php">
			<div class="row">
				<input class="form-control" type="text" name="userName" placeholder="Username...">
			</div>
			<div class="row">
				<input class="form-control" type="password" name="name" placeholder="Password...">
			</div>
			<div class="row">
				<input class="col-xs-3 col-xs-offset-3 btn btn-success" type="submit" value="Login">
				<input class="col-xs-3 btn btn-danger" type="button" value="Cancel">
			</div>
		</form>

	</div>


</body>
</html>


