<?php
    define("TITLE", "V-A-M-P");
    define("SUBTITLE", "Welcome to V-A-M-P");
    $favColor="Black";
    $myName="Andrew";
    //$myName="A&ntildedrew";
    $birthYear = 1995;
    $password = "BadPassword";
    $password = sha1($password);

    date_default_timezone_get('America/Phoenix');

    $today = date('l, F j, Y'); //l is monday-sunday
    $thisYear = date('Y');

    $myAge = ($thisYear - $birthYear);

    //Concat example
    $greeting = "Hello ";
    $greeting .= "Sir or" . " Madam. ";
    $greeting.strtolower();
    echo $greeting;


    //$some_people = array("Bob", "Bill", "Jimmy", "James");

    $users = array(
      array(
        name => "Bob",
        premium => true,
        age => 29
      ),
      array(
        name => "Bill",
        premium => false,
        age => 22
      ),
      array(
        name => "Jimmy",
        premium => true,
        age => 19
      )
    );

    $currentUser = 0;

    if($users[$currentUser][premium]){
      echo("Thank you for being a \"premium member!\"");
    } else {
      echo("Click here to upgrade to premium");
    }


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
    <p><?php echo $myName; ?></p>

    <h3>My Age:</h3>
    <p><?php echo $myAge; ?></p>

    <h3>My Favorite Color:</h3>
    <p><?php echo $favColor; ?></p>
    <hr></hr>

    <h5>Hello, <?php echo $users[0][name] , " you are " , $users[0][age]?></h5>
    
    <!-- Copywrite Footer -->
    <small>&copy;<?php echo $thisYear; ?> - <?php echo $myName; ?></small>
  </body>
</html>

