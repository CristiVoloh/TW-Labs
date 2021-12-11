<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAS - Appointment Service</title>
    <script src="https://kit.fontawesome.com/2872a7f099.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="src/css/main.css">
	<link rel="stylesheet" href="src/css/validate.css">
</head>
<body>

<?php include("src/php/login.php");?>

	<div class="wrapper">
	    <div class="sidebar" data-aos="fade-right">
	    	<div class="logo">
				<img src="src/img/logos/HASlogo.png" alt="HASlogo">
				<div class="service-name">
					<header>HAS</header>
					<br>
					<p>Hospital Appointment System</p>
				</div>
			</div>
	    	<div class="header-button-section">
	    		<button class="primary-button">Book Appointment</button>
	    	</div>
	    	<ul>
	    		<li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
				<?php if(isset($_SESSION['name'])) { ?>
	    			<li><a href="#"><i class="fas fa-house-user"></i>Personal cabinet</a></li>
				<?php } ?>
	    		<li><a href="hospitals.php"><i class="fas fa-hospital-alt"></i>Hospitals</a></li>
	    		<li><a href="#"><i class="fas fa-newspaper"></i>Subscribe to news</a></li>
	    		<li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>
	    		<li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
	    		<li><a href="#"><i class="fas fa-envelope"></i>Contact</a></li>
				<li><a href="#"><i class="fas fa-cogs"></i>Settings</a></li>
	    	</ul>

	    	<div class="login-register">
	    		<a href="home.php" id="login_open_pop_up" class="login_open_pop_up"> <i class="fas fa-arrow-circle-left"></i> Back to main page</a> 
	    	</div>

	    </div>

	    


	    <div class="main-content">

	    	<div class="nav-bar" data-aos="fade-down">
	    		<div class="search-bar nav-element">
	    			<i class="fas fa-search"></i>
	    			<input type="text" placeholder="Search..">
	    		</div>

				<div class="search-button nav-element">
					<button class="primary-button">Search</button>
				</div>

				<div class="changeTheme nav-element">
					<input type="checkbox" class="themeCheckbox", id="themeCheckbox">
					<label for="themeCheckbox" class="changeThemeLabel">
						<i class="fas fa-user-md"></i>
						<i class="fas fa-user-md"></i>
						<div class="ball"></div>
					</label>
				</div>
	    	</div>

            <div class="form-section" data-aos="fade-up">
                <div class="form-body">
	    			<h2>Login</h2>
	    			<p>Log in to your personal HAS account</p>
	    			<form action="login-page.php" id="login" name="login" method="POST" data-aos="fade-up">
	    				<input type="text" name="email" placeholder="E-Mail" required data-aos="fade-up">
	    				<input type="password" name="password" placeholder="Password" required data-aos="fade-up">
						<br>
						<div class="error" style="text-align: center;"></div>
						<button type="submit" name="login" class="primary-button registration-button" data-aos="fade-up">Login</button>
    				</form>
	    			<p>Don't have an account? <a href="registration-page.php" class="register_open_pop_up" data-aos="fade-up">Register</a></p>
	    		</div>
            </div>


	    </div>

	</div>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>AOS.init();</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script src="src/js/changeTheme.js"></script>
	<script src="src/js/validations.js"></script>
	<script src="src/js/main.js"></script>
</body>
</html>