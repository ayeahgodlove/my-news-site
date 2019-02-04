<?php

    require_once("connect.php");
?>

<!DOCTYPE <!DOCTYPE html>
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
    <?php
    if(isset($_GET['search']))
    {   $query = $_GET['query'];
        $min_lenght = 3;

        if(strlen($query) >= $min_lenght){
            $query = htmlspecialchars($query);
            $query = mysql_real_escape_string($query);
            $row_results = mysql_query("SELECT * FROM 'articles' WHERE('title' LIKE '%"/$query."%') OR ('text' LIKE '%".$query."%') ") or die(mysql_error());
            if(mysql_num_rows($row_results) >0 ){
                while($results = mysql_fetch_array($row_results)){
                    //$results = mysql_fetch_array($row_results);
                    echo  "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
                }
            }
            else{
                echo "No matching results";
            }
        }
        else{
            echo "Minimum Length is".$min_lenght;
        }
}
    ?>
</body>
</html>