<?php
    // Get values passe from form login.php

    $username = $_POST['username'];
    $password = $_POST['password'];
   // $password=md5($password);
    $db_name ="crtv";
    $link=mysqli_connect("localhost", "root", "","$db_name");
// to prevent mysql injection 
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($link,$username);
    $password = mysqli_real_escape_string($link,$password);

// Connection to the server and database
    //$link=mysqli_connect("localhost", "root", "","$db_name");
    //mysql_select_db("register");
    if(!$link){
        die("connection failed".mysqli_connect_error());
    }
    //echo "connected succesfully";
// Query the database
    $result = mysqli_query($link," SELECT * FROM users WHERE username = '$username' and password = '$password'") or die("Unable Query Database ".mysqli_connect_error());
    
    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] ==$password){
        //echo "Login Successful!!! Welcome ".$row['username'];
        session_start();
        $_SESSION['username'] = $username;
        header("location:dashboard.php");
    }
    else{
        echo "username or password incorrect";
    }

?>