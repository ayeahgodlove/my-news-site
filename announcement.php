<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News Cast</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h1>Welcome To <font color="gray" size="20px">C</font><font color="green" size="20px">R</font><font color="red" size="20">T</font><font color="yellow" size="20px">V</font> 
        NorthWest Official Website <font color="yellow" size="5px"> FM 92.5</font>  </h1>
    </header>
    <nav>
        <ul>
                <li><a  href="welcompage.php">Home</a></li>
                <li><a class="active" href="#News">News</a></li>
                <li><a href="announcement.php">Announcements</a></li>
                <li><a href="programs.php">Programs</a></li>
                <li><a href="sports.php">Sports</a></li>
                <li><a href="adverts.php">Science World</a></li>
                <li><a href="breakingnews.php">BreakingNews</a></li>
            
                <li><a href="adverts.php">National News</a></li>
                <li><a href="adverts.php">International News</a></li>
                <li><input type="search" name="search" class="search-btn" size="25px" > <input type="submit" value=Search></li>
               
        </ul>
    </nav>
    <hr>
    <section>
        <h2 style="text-align:center">Where the news happens</h2>
            <div class="w3-content w3-section" style="max-width:2000px">
 

            <img class="mySlides w3-animate-fading" src="resources/pic/come1.jpg" width="97%" height="400px">
            <img class="mySlides w3-animate-fading" src="resources/pic/comeby.jpg" width="97%" height="400px">
            <img class="mySlides w3-animate-fading" src="resources/pic/come2.jpg" width="97%" height="400px">
            <img class="mySlides w3-animate-fading" src="resources/pic/come3.jpg" width="97%" height="400px">
            </div>

            <script>
            var myIndex = 0;
            carousel();

            function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 9000);    
            }
            </script>
        <aside> 
            <!--- News Lies Hear -->
            <?php
               require_once ("connect.php");

               $query = mysql_query("SELECT * FROM post WHERE  category_id = 1 ;");
               while($row = mysql_fetch_array($query)){
                   echo '<div style="font-weight:bold; text-align:center;">';
                   echo $row['title'];
                   echo '</div>';
                   echo "\n\n";
                   echo $row['post'];
                   echo "<br />\n";

                   echo "Reported by:";
                   echo $row['post_authur'];
                   echo "<br />\n";
                 
                   $row_date = strtotime($row['date']);
                   echo date("F j, Y, g:i a",$row_date);
               }
               echo '<hr>';
               echo '<div style="color:blue; text-align:left;">';
               echo '<form action="" method= "post" > ';
               echo "Comments <br>";
               echo "<label>Name:</label><br>";
               echo '<input type ="text" name="name" >';
               
               echo "<br><label>Email:</label><br>";
               echo '<input type ="text" name="email" >';

               echo "<br> <label>Message:</label><br>";
               echo '<textarea name="comment" ></textarea> '."<br>";
               echo '<input type="submit" name="submit" value="post">';
              echo '</form> ';
              echo '</div>';

              echo "<br />\n";
              echo "<br />\n";
              echo "<br />\n";
              echo "<br />\n";
              echo '<div style="blue; float:left;  text-align:left;">';

              //Display Comments
              $sql = mysql_query("SELECT * FROM comments ;");
              while($link = mysql_fetch_array($sql)){
      
                 echo "By     ";
                 echo $link['name'];
                 
                 echo "<br />\n";
                 echo $link['comment'];
              }

              echo '</div>';
              echo "<br />\n";
              echo "<br />\n";

              echo "<br />\n";
              echo "<br />\n";

              echo "<br />\n";
              echo "<br />\n";
            ?>
        </aside>
    </section>

    <footer>
        <form action="" method="post">
            <div class="sub" >
                <label>Subscribe For daily News Update</label>
                <input type="email" name="email" placeholder="Enter your email to subscribe">
                <input type="submit" name="subscribe" value="Subscribe">
            </div>
            <h4>CRTV NORTHWEST CAMEROUN Copyright&copy 2018-2019</h4>
        </form>
    </footer>
</body>
</html>