<?php
    define("TITLE", "V-A-M-P");
    define("SUBTITLE", "Welcome to V-A-M-P");
    $fav_color="Black";
    $my_name="Andrew";
    $birth_year = 1995;

    date_default_timezone_get('America/Phoenix');

    $today = date('l, F j, Y'); //l is monday-sunday
    $this_year = date('Y');

    $my_age = ($this_year - $birth_year);

    $some_people = array("Bob", "Bill", "Jimmy", "James");

    $bob_is = array(
      name => "Bob",
      creepy => true,
      age => 29
    );
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
  </head>
  <body>
    <h1><?php echo SUBTITLE?></h1>
    <hr>
    <h2>Description</h2>
    <p>This is where I display the text from the php</p>
    
    <h3>Today's Date:</h3>
    <p><?php echo $today; ?></p>

    <h3>My Name:</h3>
    <p><?php echo $my_name; ?></p>

    <h3>My Age:</h3>
    <p><?php echo $my_age; ?></p>

    <h3>My Favorite Color:</h3>
    <p><?php echo $fav_color; ?></p>
    <hr></hr>

    <h5>Hi, I'm <?php echo $some_people[0] , " and I'm " , $bob_is[age]?></h5>
  </body>
</html>

