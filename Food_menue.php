
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Menue Straip</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
     <!-- Favicon and touch icons -->
     <link rel="shortcut icon" href="assets/ico/favicon.png">
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
     <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
</head>
<body>
    <div class="wrapper">

			<!-- Sidebar -->
			<nav class="sidebar">
				
				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>

                <?php
                    $con = mysqli_connect('localhost', 'root', '', 'tags');

                    
                    if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_password']))
                    {
                        $user_email = $_COOKIE["user_email"];
                        $user_password = $_COOKIE["user_password"];
                        $query = "SELECT * FROM user WHERE email = '$user_email' AND password = '$user_password'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) == 1)
                        {
                            $row = mysqli_fetch_assoc($result);
                            $user_name = $row['user_name'];
                            $user_image = $row['image'];
                            
                ?>
				<div class="logo">
                    <div class="containerimg">
                        <img class="logoimg" src="<?php echo $user_image; ?>" alt="User Image">
                    </div>
                    <div class="loginprofile">
                        <div class="profile">
                            <p id="user"><i class="fas fa-user" id="icon1_profile"></i>: <?php echo $user_name; ?></p>
                        </div>
                        <div class="profile">
                            <p id="email"><i class="fas fa-envelope" id="icon1_profile"></i>: <?php echo $user_email; ?></p>
                        </div>
                    </div>
                </div>
				<?php
                 }
                 else 
                 {
                     echo '<script>document.getElementById("user").innerHTML="....";</script>';
                     echo '<script>document.getElementById("email").innerHTML="....";</script>';
                 }
             } 
             else 
             {
                 header("refresh:5; url=Signin.php");
             }
                ?>
				<ul class="list-unstyled menu-elements">
					<li class="active">
						<a href="#home"> <i class="fas fa-home"></i>Home</a>
					</li>
					<li>
						<a href="#about"><i class="fas fa-cog"></i>About us</a>
					</li>
					<li>
						<a href="#menu"> <i class="fas fa-user"></i> Menu</a>
					</li>
					<li>
						<a href="#gallery"> <i class="fas fa-pencil-alt"></i> Gallery</a>
					</li>
					<li>
						<a href="#contact"> <i class="fas fa-envelope"></i> Contact us</a>
					</li>
					<li>
						<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Other sections
						</a>

						<ul class="collapse list-unstyled" id="otherSections">
                        <form  method="post" >
							<li>
                                <i class="fas fa-sync"></i><input type="submit" class="out" name="out" value="Log Out">
							</li>
                        </form>
                        <?php 
                            if(isset($_POST["out"]))
                            {
                                setcookie("user_email", "" , time()-3600);
                                setcookie("user_password", "" , time()-3600);
                                header("location:Signin.php");
                            }
                        ?> 
						</ul>
					</li>
				</ul>
				
				<div class="to-top">
					<a class="btn btn-primary btn-customized-3" href="#" role="button">
	                    <i class="fas fa-arrow-up"></i> Top
	                </a>
				</div>
				
				<div class="dark-light-buttons">
					<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
					<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
				</div>
			
			</nav>
			<!-- End sidebar -->
			
			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">
			
				<!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Menu</span>
                </a>
			</div>
		
		        
        <!-- End wrapper -->
    <!-- ********************************************************* -->
    <!-- ********************************************************* -->
    <main>


<!-- Javascript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    <!-- End Javascript -->
</body>
</html>