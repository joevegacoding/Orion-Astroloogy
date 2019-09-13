<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Youssef Bouhanef">
    <title>About Us</title>
    <link rel="stylesheet" href="CSS/Style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="Branding">
        <h1><span class="highlight">Orion</span>Astrology</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li class="datepicker"><a href="Datepicker.html">Find My Zodiac</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="ContactUs.html">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="newsletter">
      <div class="container">
        <h1>Enter your date of birth below to get your Zodiac Sign!</h1>
        <form class="" action="index.html" method="post">

        </form>
      </div>
      </section>
      <section id="main">

      </head>
      <body>
      <div class="container">
        <div class="dates" style="margin-top:100px;color:#2471a3;">
          <label>Pick A Date</label>


            <?php
            if(isset($_POST["button"]))
            {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "orionastrology";
               
                
             $connection = mysqli_connect($servername, $username, $password, $dbname);
            

                if($connection)
                {
                    echo "Connection established! <br>";
                }

            else
            {
                die("Connection failed. Reason: ".mysqli_connect_error());
            }
            
            $name = $_POST["name"];
            $mydate = $_POST["event_date"];
            $month = date("m",strtotime($mydate));
            $day = date("d",strtotime($mydate));
            $mydate = '2000-'.$month.'-'.$day;
         
            $sql = "SELECT * FROM signs WHERE DateStart <= '$mydate' AND DateEnd >= '$mydate'";
                
                
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);
        
        
            
            if ($resultCheck > 0) {
                
               if ($row = mysqli_fetch_assoc($result)) {
                     echo "<br>Hello <strong>".$name. "</strong> Your Zodiac sign is <strong>".$row['Sign']. "</strong>.". "<br><br><strong>Here's a little description about your Zodiac Sign:</strong><br> " .$row['Description']; 
                    
                }
                
                    
                }
                   
              
            }
                
            ?>
            
            
<!--
       /*  if ($_SERVER["REQUEST_METHOD"] == "POST")
         {
           $mydate=$_POST["event_date"];
           $month = date("m",strtotime($mydate));
            $day = date("d",strtotime($mydate));
            echo $month ."  ". $day; 
             exit();
            $connection = mysqli_connect("localhost", "root","","orionastrology");

                if($connection)
                {
                    echo "Connection established! <br>";
                }

            else
            {
                die("Connection failed. Reason: ".mysqli_connect_error());
            }
             
             $sql = "SELECT * FROM orionastrology";
             
            if($result = mysqli_query($connection, $sql)) {
                 if(mysqli_num_rows($result) > 0){
                     echo "<table>"
                 }
             }
          
            
	 } 

       }
*/
-->
            

              <form class="" action="Datepicker.php" method="post">
                  <br>
                  <input type="text" style="width:200px;background-color:#aed6f1;" class="form-control" id="usr1" name="name" placeholder="First Name" autocomplete="off" >
                  <br>
                <input type="text" style="width:200px;background-color:#aed6f1;" class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                <br>
          <button type="submit" class="button_1 "name="button">Submit</button>

            </form>

          <br>
          <br>
          <article id="main-col">
            <h1 class="page-title">Did You Know!</h1>
            <h3><strong>The Moon affects the body just like it affects the ocean</strong></h3>
            <p>Astrologers believe that the moon can influence our bodies in the same way that the moon influences the ocean waves. Think about this, if the moon can affect huge tides in the ocean, it must have some effect on the human body (which is 75% water!). Take notice of how your mood might change during a full moon, for example.</p>
            <h3>More women than men love astrology</h3>
            <p>75% of those who read their horoscopes are women, according to a study by Stariq.com. This could explain why horoscopes are so popular in women’s weekly magazines!</p>
            <h3>31% of Americans believe in astrology</h3>
            <p>A recent poll involving thousands of Americans revealed that a third believe in astrology, 18% of those polled were unsure. If you’re a non-believer, we can bet that you’ve read your horoscopes at least once before, even if it was purely for entertainment…</p>

          </article>
          <aside id="sidebar">
            <div class="dark">
              <h3>Catholic popes of the Middle Ages loved astrology</h3>
              <p>
                A number of Catholic popes in the Middle Ages used astrology. Sixtus IV became the first ever pope to draw and interpret a horoscope, and Leo X and Paul III relied heavily on the advice and wisdom of astrologers.
                </p>

            </div>
          </aside>
          </div>
        </section>

        </div>
      </div>
      </body>

          </div>
        </aside>
        </div>
      </section>

      <footer>
        <p>Orion Astrology, Copyright &copy; 2019</p>
      </footer>
  </body>
</html>
