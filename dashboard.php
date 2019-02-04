<?php
     session_start();
     if(!isset($_SESSION['username']))
     {
         include 'login.php';
         die();
     } 
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Admin DashBoard</title>
    
    <link rel="stylesheet" href="style1.css">

    <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
    
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/bootstrap.js"></script>
    
    
</head>
<body>
    <div class="container">
    <header>
        <img src="resources/pic/logo.jpg" alt="logo">
        <h2>Welcome  
        <?php
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username']." ";
                echo "!!!";
            }
        ?>
        <a class="btn-danger"href="login.php">Logout</a></h2>
        
    </header>
    
    <div id="contents">
        <aside>
            <nav>
                <a class="btn-danger active"  href="index.php">Home Page</a>
                <a class="btn-danger" href="postnews.php">Add News Post</a>
                <a class="btn-danger" href="postnews.php">Register NewUser</a>
                <a class="btn-danger" href="viewcontact.php">Validate Request</a>
                <a class="btn-danger" href="deletepost.php">View Post</a>
                <a class="btn-danger" href="?page=comments">Comments</a>
                <a class="btn-danger" href="?page=accounts">Delete accounts</a>
               
            </nav>
        </aside>
        <section id="page">
            <?php
                if(@$_GET['page']){
                    $url = $_GET['page'].".php";
                    if(is_file($url)){
                        include $url;
                    }
                    else{
                        echo "Request file not found!";
                    }
                }
                else
                {
                   include 'main.php';
                }
                

            ?>
        </section>
    </div>
    
    <div class="clear"></div>
    <footer>
        <p>Copyrigth reserved &copy; CRTV North West 2018 - 2019</p>
    </footer>
    
   </div> 
</body>
</html>