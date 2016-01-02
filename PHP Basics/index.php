<?php 
define("YEAR", 2014);
define("JOB_TITLE", "Teacher");
define("USE_FULL_NAME", TRUE);
define("MAX_BADGES", 150000);
//This is my first name

$first_name = "Hampton";
$last_name = "Paulk";
$location = "Orlando, FL";
$role = "Teacher";


if( USE_FULL_NAME == TRUE ){
  $name = $first_name . " " . $last_name;
}


?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <pre><?php
         $a = 10;
         $b = 0;

      var_dump($a || $b);
      var_dump(! $a);//TRUE IF A IS NOT TRUE

      ?>
      </pre>
      <ul>
        
      </ul>
     
    </section>
  </body>
</html>