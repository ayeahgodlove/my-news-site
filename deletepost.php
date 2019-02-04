<?php

?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <title> Delete News Post</title>

    <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="css/poststyle.css">

    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/bootstrap.js"></script>
</head>
<body>
    <header>
            <img src="resources/pic/logo.jpg" alt="logo">
            <h2>Delete News Post
                <a class="btn-danger"href="dashboard.php">Home</a>
            </h2>
        </header>
    <div id="content">
        <aside style="margin-right:15px; margin-top:90px;">

            <form action="#" method="post"  enctype="multipart/form-data" class="postnewsForm" >
                <label>Enter Id:</label>
                <input type="number" name="post_id">
                <input type="submit" class="btn-lg btn-primary" name="delete" value="Delete">

            </form>
            <?php
                require_once ("connect.php");
                if(isset($_POST['post_id'])){

                    $emp_id = $_POST['post_id'];
                $sql = mysql_query("DELETE FROM post WHERE post_id = $emp_id" );

                }
                
            ?>
            
        </aside>
        <hr><br><br><br><br><br>
        <?php 
                require_once ("connect.php");

                $query = mysql_query("SELECT * FROM post;");
                while($row = mysql_fetch_array($query)){
                    echo '<div style="font-weight:bold; text-align:center;">';
                    echo '<hr>';
                    echo "Post id:";
                    echo $row['post_id'];
                    echo '<hr>';
                    echo $row['title'];
                    echo '</div>';
                    echo "<br />\n";
 
                    echo '<div style=" text-align:left; text-decoration= Roboto sans serifs; line-spacing:2px; ">';
                    echo $row['post'];
                    echo "<br />\n";
 
                    echo "Reported by:";
                    echo $row['post_authur'];
                    echo "<br />\n";
                    $row_date = strtotime($row['date']);
                    echo date("F j, Y, g:i a",$row_date);
                    echo '</div>';
                    echo "<br />\n";
                    echo "<br />\n";
                    echo '<hr>';
                }


            ?>
    </div>

    <footer>
        <p>Copyrigth reserved &copy; CRTV North West 2018 - 2019</p>
     </footer>
    
</body>
</html>