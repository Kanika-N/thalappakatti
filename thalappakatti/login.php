<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="element"> 
    <div class="nav">
        <div class="logo">
            <img src="thalappakatti.jpeg">
            <h6>Dindigul</h6>
            <h2 class="name">Thalappakatti</h2>
        </div>
        <div class="navlinks">
            <ul>
                <li><a class="navborder" href="home.html">Home</a></li>
                <li><a class="navborder" href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <form class="login-form" method="post" action="validate.php">
            <h2 style="color:crimson">LOGIN</h2>
            <hr>
            <br>
            <br>
            Name:<input type="text" name="Name">
            Email:<input type="email" name="Email">
            Password:<input type="password" name="Password">
            <button type="submit" class="login">Login</button> <!-- Changed here -->
            <br>
            <br>
            <hr>
            <br>
            <div class="forget">
                <div><a href="">Forget Password?</a></div>
            
            <div><a href="">Don't have an account?</a></div>
        </div>
        </form>
    </div>
</body>
</html>
