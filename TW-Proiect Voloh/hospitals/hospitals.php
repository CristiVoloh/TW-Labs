<?php session_start(); ?>

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
			<div class="userSection" style="display: <?php if(isset($_SESSION['displayUser'])) {echo $_SESSION['displayUser'];} else {echo 'none';}?> ">
				<img src="src/img/logos/user.png" alt="">
				<h2> <?php if(isset($_SESSION['name'])) {echo $_SESSION['name'];} else {echo 'none';}?> </h2>
				<p> <?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} else {echo 'none';}?> </p>
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

	    	<div class="login-register" style="display: <?php if(isset($_SESSION['displayLinks'])) {echo $_SESSION['displayLinks'];} else {echo 'block';}?>">
	    		<a href="login-page.php" class="login_open_pop_up">Login</a> 
	    		<span>/</span> 
	    		<a href="registration-page.php" class="register_open_pop_up">Register</a>
	    	</div>

			<div class="logout" >
				<a href="logout.php" style="display: <?php if(isset($_SESSION['displayLogout'])) {echo $_SESSION['displayLogout'];} else {echo 'none';}?> ">Logout</a>
			</div>

	    </div>

	    

	    <div class="main-content">

	    	<div class="nav-bar" data-aos="fade-down">
	    		<div class="search-bar nav-element">
	    			<i class="fas fa-search"></i>
	    			<input type="text" placeholder="Search..">
	    		</div>

	    		<div class="service-select nav-element">
				  <select>
				    <option value="0">Category</option>
				    <option value="1">cat1</option>
				    <option value="2">cat2</option>
				    <option value="3">cat3</option>
				    <option value="4">cat4</option>
				  </select>
				</div>

				<div class="hospital-select nav-element">
				  <select>
				    <option value="0">Department</option>
				    <option value="1">cat1</option>
				    <option value="2">cat2</option>
				    <option value="3">cat3</option>
				    <option value="4">cat4</option>
				  </select>
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

	    	<div class="hospitals">
				<?php 
					include("src/php/server.php"); 
					$sql = "SELECT * FROM hospitals";
					$result = mysqli_query($db, $sql);
				?>

				<div class="general-information-section" data-aos="fade-up">
					<p>Number of hospitals: <?php echo $result->num_rows; ?></p>
				</div>

				<?php while($row = $result->fetch_assoc()): ?>
					<div class="hospital"  data-aos="fade-up">
						<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">
						<div class="hospital-description">
							<div class="hospital-name">
								<h2> <i class="fas fa-address-card"></i> <?php echo $row['name']; ?> </h2>
							</div>	
							<div class="hospital-address">
								<h3> <i class="fas fa-map-marker-alt"></i> <?php echo $row['address']; ?> </h3>
							</div>
						</div>
					</div>
				<?php endwhile; ?>

	    	</div>


	    </div>

	</div>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>AOS.init();</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script src="src/js/changeTheme.js"></script>
	<script src="src/js/main.js"></script>
</body>
</html>