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
        <div class="slideshow-container">

  			<!-- Full-width images with number and caption text -->
  			<div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="resources/pic/come1.jpg" width="100%" height="400px" >
                <div class="text">CRTV North West the station for the people</div>
	 	    </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="resources/pic/come2.jpg" width="100%" height="400px">
                <div class="text">CRTV North West Leads the way to Change</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="resources/pic/come3.jpg" width="100%" height="400px">
                <div class="text">Thanks for choosing Us</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		

		<!-- The dots/circles -->
		<div style="text-align:center">
  			<span class="dot" onclick="currentSlide(1)"></span>
  			<span class="dot" onclick="currentSlide(2)"></span>
  			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		<script>
			var slideIndex = 1;
				showSlides(slideIndex);

			function plusSlides(n) {
  				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
 				showSlides(slideIndex = n);
			}

			function showSlides(n) {
  				var i;
  				var slides = document.getElementsByClassName("mySlides");
  				var dots = document.getElementsByClassName("dot");
  				if (n > slides.length) {slideIndex = 1}    
  				if (n < 1) {slideIndex = slides.length}
  				for (i = 0; i < slides.length; i++) {
      			slides[i].style.display = "none";  
  				}

  				for (i = 0; i < dots.length; i++) {
      			dots[i].className = dots[i].className.replace(" active", "");
  				}
  				slides[slideIndex-1].style.display = "block";  
  				dots[slideIndex-1].className += " active";
  		    }
        </script>
        <aside> 
            <!--- News Lies Hear -->
            <?php
               require_once ("connect.php");

               $query = mysql_query("SELECT * FROM post WHERE  category_id = 6 ;");
               while($row = mysql_fetch_array($query)){
                    echo '<hr>';
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