<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">
  

  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>

	<title>Slide Navbar</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<h2>Bootstrap 4 Right align Navbar</h2>
	</div>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="#">CAR DEALER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop Pre-Owned</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop New Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clearence Event</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Carfax</a>
                        <a class="dropdown-item" href="#">Carproof</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Omnivic</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
				<?php
			if(isset($_SESSION["userid"]))
			{
			?>	
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal" data-target="#myModal"><?php echo $_SESSION["useruid"]; ?></a>                  
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="includes/logout.inc.php" data-toggle="modal" data-target="#myModal">Logout</a>
                </li>
				<?php
		}
		else
		{
			?>
			 <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" type="button" href="#" data-toggle="modal" data-target="#myModal">Sign In</a>                  
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="#" data-toggle="modal" data-target="#myModal">Register</a>
                </li>
				<?php
		}
		?>

				
            </ul>
        </div>
</div>

	<ul>
		<?php /*
			if(isset($_SESSION["userid"]))
			{
			?>	
			<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
			<li><a href="includes/logout.inc.php">LOGOUT</a></li>
			<?php
		}

		else
		{
			?>
			<li><a href="#">signup</a></li>
			<li><a href="#">login</a></li>
			<?php
		}
		*/?>

    </ul>	
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="includes/signup.inc.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="uid" placeholder="User name">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="pwd" placeholder="Password">
					<input type="password" name="pwdrepeat" placeholder="Password repeat">
					<button type="submit" name="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="includes/login.inc.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="uid" placeholder="user name">
					<input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="submit">Login </button>                          
				</form>
			</div>


	</div>
</body>
</html>

  
</body>
</html>
