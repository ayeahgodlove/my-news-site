<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Validate Request</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/poststyle.css">
    
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/bootstrap.js"></script>

    
</head>
<body>
    <div class="container">
            <header>
                <img src="resources/pic/logo.jpg" alt="logo">
            </header>

        <div id="content">
            <aside>
            <?php
               require_once ("connect.php");

               $query = mysql_query("SELECT * FROM contact;");

                echo '<div style="font-weight:bold; text-align:center;">';
                echo "Request From:";
                echo "\n\n";
                echo '</div>';
               while($row = mysql_fetch_array($query)){
                  

                   echo '<div style="font-weight:bold; text-align:left;">';
                   echo "Name:     ";
                   echo $row['name'];
                  
                   echo "<br />\n";
                   echo "Number:    ";
                   echo $row['number'];
                   echo "<br />\n";
                
                   echo "Email:    ";
                   echo $row['email'];
                   echo "<br />\n";
                 
                   echo "Message:   ";
                   echo $row['message'];
                   echo '</div>';

                   echo "<br />\n";
                   echo "<br />\n";
                
                   
               }
            ?>
            <form action="#" method="post" class="postnewsForm">
               <label>Email:</label>
               <input type="text" name="email">
               <label>Reply Message:</label>
               <textarea name="Reply" ></textarea>
               <input type="submit" name="submit" value="Reply">
               
            </form>
            </aside>
        </div>
        
        <footer>
                <p>Copyrigth reserved &copy; CRTV North West 2018 - 2019</p>
        </footer>
    </div>
    
</body>
</html>