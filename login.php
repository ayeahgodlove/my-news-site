<?php
  
?>
<!DOCTYPE HTML>
<html lang="en-Us">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>LoginForm</title>
            
        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
        
        <script src="resources/js/bootstrap.min.js"></script>
        <script src="resources/js/bootstrap.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div class="header">
                <h1>Login Form</h1>
            </div>
        <div class="container">
            
                <form method="post" action="process.php" method="post">
                    <table>
                        <tr>
                            <td>Username:</td>
                            <td><input class="input-lg" type="text" id="username" name="username" required ></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input class="input-lg" type="password" id="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value="remember-me">Remember me</td>
                        </tr>
                        <tr>
                            <td><a href="resetpass.php">ForgotPassword?</td>
                            <td><input class="btn-primary btn-lg" type="submit" name="submit" value="Login" /></td>
                        </tr>
                    </table>
                </form>
            
            <div class="footer">
                <a href="#setting">Setting</a>
                <a href="#setting">Cookies</a>
                <a href="#setting">Help</a>
                <hr>
                <h4>CRTV NORTHWEST CAMEROUN Copyright&copy 2018-2019</h4>
            </div>
        </div>
    </body>
    

</html>
            