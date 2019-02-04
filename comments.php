<?php
     //
      require_once ("connect.php");
        //Post counts
        $post_count = mysql_query("SELECT * FROM post ");
        //Comment count
        $comment_count = mysql_query("SELECT * FROM comments");



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
        <div id="menu">
            <table>
                <tr>
                <label>Table Post:</label>
                <?php echo mysql_num_rows($post_count); ?>
                </tr>
                <tr>
                 <label>Table Comments:</label>
                <?php echo mysql_num_rows( $comment_count);?>
                </tr>
            
                <tr><th><td>Name</td></th><th><td>Comment</td></th><th><td>ID</td></th></tr>
                <?php
                    require_once ("connect.php");
                    $sql = mysql_query("SELECT * FROM comments ;");
                    while($link = mysql_fetch_array($sql)){

                      $id = $link['comments_id'];
                      $name =  $link['name'];

                      $comment =  $link['comment'];
                    
                      echo  "<div><tr><td> $name | </td><td> $comment | </td><td> $id | </td><tr></div>";
                }
            ?>
        
            </table>
        </div>
    </div>
    
</body>
</html>
