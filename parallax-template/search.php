<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "test";
  $con = mysqli_connect($servername,$username,$password,$database);
  $search_term=$_POST['search_val'];

  $query1 = "select * from department where dept_name like '%$search_term%';";
  //$query2 = "select * from restaurant where cusine like '%$searchterm%';";
  //$query3 = "select * from restaurant where menu like '%$searchterm%';";

  $result1 = mysqli_query($con,$query1);
  //$result2 = mysqli_query($con,$query2);
  //$result3 = mysqli_query($con,$query3);
  if (!$result1)
  {
    echo "Sorry! There were no suitable results for your search!";
    exit();
  }

  while ($row = mysqli_fetch_array($result1))
  {
      $name = $row['dept_name'];  
      //$description = $row['summary'];
      //$image = $row['posterlink'];
       //$rating = $row['rating'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>zomato</title>

  <!-- CSS  -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <!--<nav class="red" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">zomato</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul> -->

      
        
        


<div class="row">
   </br>
</div>

<div class="row">
  <h4 style="margin:25px;">Results for your search</h4>
</div>

<div class="col s10 m4">
      <h5 class="header" style="margin:25px;" ><?php echo $name ?></h5>
      <div class="card horizontal" style="margin:25px 350px 25px 25px;">
        <div class="card-image" style="margin:25px;">
          <img src="">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Restaurant cost for 2, address etc etc !!! </p>
          </div>
          <div class="card-action">
            <a href="#">Visit restaurant Page</a>
          </div>
        </div>
      </div>
    </div>

   <footer class="page-footer red">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Us</h5>
          <p class="grey-text text-lighten-4">We are a team of college students who want to make it easy for everyone to find the best places to satisfy their cravings within their budget !</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">For Restaurants</h5>
          <ul>
            <li><a class="white-text" href="">Add a restaurant</a></li>
            <li><a class="white-text" href="#!">Buisness owner guidelines</a></li>
            <li><a class="white-text" href="#!">Legal Aspects</a></li>
            <li><a class="white-text" href="#!">Get our widgets</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Locations</h5>
          <ul>
            <li><a class="white-text" href="https://www.google.co.in/maps/place/Mangaluru,+Karnataka/@12.9231621,74.7820487,12z/data=!3m1!4b1!4m5!3m4!1s0x3ba35a4c37bf488f:0x827bbc7a74fcfe64!8m2!3d12.9141417!4d74.8559568">Mangalore</a></li>
            <li><a class="white-text" href="#!">We are expanding!</a></li>
            <li><a class="white-text" href="#!"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="https://github.com/kavya-a/ITA-Project">Junglee & ChandyCool</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>