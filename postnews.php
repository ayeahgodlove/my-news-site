<?php
    session_start();
    require_once ("connect.php");
    $errors = array();

    if(isset($_POST['submit'])){
        if(empty($_POST['username'])){
            array_push($errors, 'you did not enter any username');

        }
        if(empty($_POST['email'])){
            array_push($errors, 'you did not enter any email');

        }
        if(empty($_POST['password'])){
            array_push($errors, 'you did not enter any password');

        }
        $old_username = mysql_query("SELECT id FROM accounts WHERE username = '".$_POST['username']."' LIMIT 1;") or die(mysql_error());
        if(mysql_num_rows($old_username)>0){
            array_push($errors,'This username is already registered');
        }

        $old_email = mysql_query("SELECT id FROM accounts WHERE email ='".$_POST['email']."' LIMIT 1; ") or die(mysql_error());
		if(mysql_num_rows($old_email)>0){ 
            array_push($error, 'This email has already been register');
        }
        
        if($_POST['password'] != $_POST['password1']){
            array_push($errors, 'You Enter two different Password');
        }
        if(sizeof($errors) == 0){
             //htmlentities($_POST['username'],ENT_QUOTES));
            $username = htmlentities($_POST['username'], ENT_QUOTES);
            $email = htmlentities($_POST['email'], ENT_QUOTES);
            $password = htmlentities($_POST['password'], ENT_QUOTES);

            if(mysql_query("INSERT INTO accounts (username,email,password) VALUES('{$username}','{$email}','{$password}')")){
                echo '<script>alert("Successful Registration!")</script>';
                exit();
            }
            else{
                echo "account registration unsucessful";
            }

        } 
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title> Post News Article</title>

    <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
  
    <link rel="stylesheet" href="css/poststyle.css">

    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/bootstrap.js"></script>
</head>
<body>

    <?php 
        foreach($errors as $e){
            echo $e;
            echo "<br />\n";
	    }
    ?>
    
    <div class="container">
        <header>
            <img src="resources/pic/logo.jpg" alt="logo">
            <h2>Add New Post/ Register New Account
                <a class="btn-danger"href="dashboard.php">Home</a>
            </h2>
        </header>
        <div id="content">
            <aside>
                <form action="" method="post" enctype="multipart/form-data" class="postnewsForm">
                    <h3 style="text-align:center">Add New Post</h3>
                    <label>title:</label>
                    <input type="text" name="title">
                    
                    <label>Publisher:</label>
                    <input type="text" name="post_authur"> 

                    <label>Category:</label>
                    <input type="number" name="category_id"> 

                    <label>article:</label>
                    <textarea name="post" cols="50" rows="6"></textarea>

                    <label>Upload Files:</label>
                    <input type="file" name="name">
                    <input class="btn-lg btn-primary" type="submit" name="post" value="POST"> 
                </form>
            </aside>
            <section>
                <form action="postnews.php" method="post" class="registerForm">
                    <h3 style="text-align:center;">Register New Account</h3>
                    <label>username:</label>
                    <input type="text" name="username">
                    <label>email:</label>
                    <input type="text" name="email">
                    <label>Password:</label>
                    <input type="password" name="password">
                    <label>Confirm Password:</label>
                    <input type="password" name="password1">
                    <input class="btn-lg btn-primary" type="submit" name="submit" value="Register"> 


                </form>
            </section>
        </div>
        <footer>
            <p>Copyrigth reserved &copy; CRTV North West 2018 - 2019</p>
        </footer>
    <div>
</body>
</html>

<?php
  // session_start();
   require_once("connect.php");
   //$error = array();

   if(isset($_POST['post'])){
       if($_POST['title'] == '' or $_POST['post_authur'] == '' or $_POST['post'] == ''){
           echo '<script>alert("Field Cannot be empty")</script>';
           exit();
       }

       $title = htmlentities($_POST['title'], ENT_QUOTES);
       $post_authur = htmlentities($_POST['post_authur'], ENT_QUOTES);
       
       $content = htmlentities($_POST['post'], ENT_QUOTES);
      // $file =addslashes(file_get_contents($_FILES["name"]["tmp_name"]));
     
         
      $link = mysql_connect("INSERT INTO post ('title', 'post_authur', 'category_id', 'post') VALUES ('{$title}','{$post_authur}', '{$category_id}' ,'{$content}')");
      if($link){

        echo '<script>alert("News was successfully posted!!!")</script>';
       }
       else{
           echo '<script>alert("News was Unsuccessfully!!! ")</script>';
           exit();
       }
   }
?>
watson
9000
Akoni
5000
<ul>
                        <li><a href="#" class="btn active">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="visit.php">Visit</a></li>
                        <li><a href="store.php">Store</a></li>
                        
                     </ul>