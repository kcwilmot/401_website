<!--header, shows name and email, change password link, address info, footer-->
<?php

  include_once("header.php");
  $dao = new Dao();
  $logger = new KLogger("log.txt" , KLogger::DEBUG);
  $logger->LogDebug("On MyAccount page for user [{$_SESSION['user']}].");

  //Check if authenticated
  if ((isset($_SESSION['authenticated']) && !$_SESSION['authenticated']) || !isset($_SESSION['authenticated'])) {
    header("Location: login.php");
  }

  
  $userInfo = $dao->get_userInfo($_SESSION['user']);
  $logger->LogDebug("User info return: " . print_r($userInfo,1));


  echo "<h1 id=\"my-account-header\">My Account</h1>";
  echo "Email: " . $userInfo[0]['email'] . "<br>";
  echo "<br>Changing password and updating mailing address under construction";
  /*
  // TODO: set up a loop to print user info.
  for($i = 3; $i <= 12; $i++) {
    if($i != 5) {

    }
  }





<a href="myaccount.php">Change Password?</a><br>
<div>
  Shipping Address:
  <div id="account-shipping-address">
    555 A Street Adress
    Apt 666
    City, ST 12345
  </div>
</div>
*/
//<?php
  include_once("footer.php");


  // echo "<div class='bad'>Invalid Username or password</div>";
