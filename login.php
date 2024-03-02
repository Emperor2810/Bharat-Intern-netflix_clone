<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<title>Netflix Login</title>
</head>
<body>
    <nav>
        <span><img width="60" src="assets/logo.svg" alt=""></span>
    </nav>
    <div class="container">
        <h1>Sign In</h1>  
        <form action="loginP.php" method="post">
            <input type="email" name="email" id="email" placeholder="Email or Phone Number" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
            <div class="remember">
                <input type="checkbox" name="remember" id="remember">
                <label class="rem" for="remember">Remember me</label>
                <a href="#">Need Help?</a>
            </div>
        </form>
        <div class="signup">
            <p>New to Netflix? <a href="signup.php">Sign up now</a>.</p>
        </div>
    </div>
</body>
</html>
