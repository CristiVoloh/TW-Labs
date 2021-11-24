
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAS - Appointment Service</title>
    <script src="https://kit.fontawesome.com/2872a7f099.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="src/css/main.css">
	<link rel="stylesheet" href="src/css/validate.css">
</head>
<body>

<?php include("src/php/register.php");?>

	<div class="wrapper">
	    <div class="sidebar">
	    	<div class="logo">
				<img src="src/img/logos/HASlogo.png" alt="HASlogo">
				<div class="service-name">
					<header>HAS</header>
					<br>
					<p>Hospital Appointment System</p>
				</div>
			</div>
			<div class="userSection" style="display: <?php echo $displayUser; ?>">
				<img src="src/img/logos/user.png" alt="">
				<h2><?php echo $name; ?></h2>
				<p><?php echo $email; ?></p>
			</div>
	    	<div class="header-button-section">
	    		<button class="primary-button">Book Appointment</button>
	    	</div>
	    	<ul>
	    		<li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
	    		<li><a href="#"><i class="fas fa-link"></i>Shortcuts</a></li>
	    		<li><a href="#"><i class="fas fa-stream"></i>Overview</a></li>
	    		<li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
	    		<li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>
	    		<li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
	    		<li><a href="#"><i class="fas fa-envelope"></i>Contact</a></li>
	    	</ul>

	    	<div class="login-register" style="display: <?php echo $displayLinks; ?>">
	    		<a href="#" id="login_open_pop_up" class="login_open_pop_up">Login</a> 
	    		<span>/</span> 
	    		<a href="#" id="register_open_pop_up" class="register_open_pop_up">Register</a>
	    	</div>

			<div class="logout" style="display: <?php echo $displayLogout; ?>">
			<a href="#" onclick="" id="logoutLink">Logout</a>
			</div>

	    	<div class="popUp" id="register_pop_up">
	    		<div class="pop_up_container">
	    			<div class="pop_up_body" id="pop_up_body">
	    				<h2>Register</h2>
	    				<p>Register your personal HAS account</p>
	    				<form action="home.php" id="registration" name="registration" method="POST">
	    					<input type="text" name="name" placeholder="Numele, prenumele" required>
	    					<input type="text" name="email" placeholder="E-Mail" required>
	    					<input type="password" name="password" placeholder="Password" required>
	    					<input type="password" name="cpassword" id="cpassword" placeholder="Verify password" required>
							<br>
	    					<button type="submit" name="register" class="primary-button registration-button">Register</button>
	    				</form>

	    				<p>Already have an account? <a href="#" class="login_open_pop_up">Log in</a></p>

	    				<div class="pop_up_close" id="register_pop_up_close">&#10006</div>
	    			</div>
	    		</div>
	    	</div>

			<div class="popUp" id="login_pop_up">
	    		<div class="pop_up_container">
	    			<div class="pop_up_body" id="pop_up_body">
	    				<h2>Login</h2>
	    				<p>Log in to your personal HAS account</p>
	    				<form action="" id="login" name="login" method="POST">
	    					<input type="text" name="email" placeholder="E-Mail" required>
	    					<input type="password" name="password" placeholder="Password" required>
							<br>
	    					<button type="submit" name="login" class="primary-button registration-button">Login</button>
	    				</form>

	    				<p>Don't have an account? <a href="#" class="register_open_pop_up">Register</a></p>

	    				<div class="pop_up_close" id="login_pop_up_close">&#10006</div>
	    			</div>
	    		</div>
	    	</div>

	    </div>

	    


	    <div class="main-content">

	    	<div class="nav-bar">
	    		<div class="search-bar nav-element">
	    			<i class="fas fa-search"></i>
	    			<input type="text" placeholder="Search..">
	    		</div>

	    		<div class="service-select nav-element">
				  <select>
				    <option value="0">Category</option>
				    <option value="1">Audi</option>
				    <option value="2">BMW</option>
				    <option value="3">Citroen</option>
				    <option value="4">Ford</option>
				    <option value="5">Honda</option>
				    <option value="6">Jaguar</option>
				    <option value="7">Land Rover</option>
				    <option value="8">Mercedes</option>
				    <option value="9">Mini</option>
				    <option value="10">Nissan</option>
				    <option value="11">Toyota</option>
				    <option value="12">Volvo</option>
				  </select>
				</div>

				<div class="hospital-select nav-element">
				  <select>
				    <option value="0">Department</option>
				    <option value="1">Audi</option>
				    <option value="2">BMW</option>
				    <option value="3">Citroen</option>
				    <option value="4">Ford</option>
				    <option value="5">Honda</option>
				    <option value="6">Jaguar</option>
				    <option value="7">Land Rover</option>
				    <option value="8">Mercedes</option>
				    <option value="9">Mini</option>
				    <option value="10">Nissan</option>
				    <option value="11">Toyota</option>
				    <option value="12">Volvo</option>
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

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> IMSP Mama si Copilul</h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> Policlinica de Cardiologie sf.Vasile</h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> Centrul medical Chisinau </h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> Spitalul de cardiologie Sf.Token</h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> IMSP Mama si Copilul</h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> IMSP Mama si Copilul</h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    		<div class="hospital">
	    			<img class="hospital-image" src="src/img/hospitals/maket.png" alt="image">

	    			<div class="hospital-description">

	    				<div class="hospital-name">
	    					<h2> <i class="fas fa-address-card"></i> IMSP Mama si Copilul</h2>
	    				</div>	

	    				<div class="hospital-address">
	    					<h3> <i class="fas fa-map-marker-alt"></i> Address Chisinau Str.Burebista</h3>
	    				</div>

	    			</div>
	    		</div>

	    	</div>


	    </div>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script src="src/js/changeTheme.js"></script>
	<script src="src/js/validations.js"></script>
	<script src="src/js/main.js"></script>
</body>
</html>