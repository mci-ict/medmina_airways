<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medmina Airways</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="./images/logo.png" alt="Medmina Airways Logo">
            <span>Medmina Airways</span>
        </div>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="#" class="nav-link active">Home</a></li>
            <li class="navbar-item"><a href="#" class="nav-link">About</a></li>
            <li class="navbar-item"><a href="#" class="nav-link">Contacts</a></li>
        </ul>
        <ul class="navbar-menu right">
            <li class="navbar-item"><a href="#" class="nav-link" id="loginLink"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            <li class="navbar-item"><a href="#" class="nav-link" id="signupLink"><i class="fas fa-user-plus"></i> SignUp</a></li>
        </ul>
    </nav>

    <!-- Heading/Motto -->
	<div class="container">
		<div class="content">
			<h1>Your  Experience  Starts  Here!</h1>
		</div>
	</div>
    <!--Heading/Moto End-->

    <!-- Bookings -->
    <div class="tabbed-box">
        <div class="tabs">
            <button class="tab-button active" data-tab="flights"><i class="fas fa-plane"></i> Flights</button>
            <button class="tab-button" data-tab="bookings"><i class="fas fa-ticket-alt"></i> My Bookings</button>
            <button class="tab-button" data-tab="status"><i class="fas fa-info-circle"></i> Flight Status</button>
        </div>
        <div class="tab-content active" id="flights">
            <h3>Flights</h3>
            
        </div>
        <div class="tab-content" id="bookings">
            <h3>My Bookings</h3>
            
        </div>
        <div class="tab-content" id="status">
            <h3>Flight Status</h3>
            
        </div>
    </div>
    <!-- Bookings -->

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close" id="closeLogin">&times;</span>
            <h2>Login</h2>
            <form>
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="email" required>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- SignUp Modal -->
    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close" id="closeSignup">&times;</span>
            <h2>Sign Up</h2>
            <form>
                <label for="signupName">Name:</label>
                <input type="text" id="signupName" name="name" required>
                <label for="signupEmail">Email:</label>
                <input type="email" id="signupEmail" name="email" required>
                <label for="signupPassword">Password:</label>
                <input type="password" id="signupPassword" name="password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>
