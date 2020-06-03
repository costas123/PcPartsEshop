<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>

    <div id="homeContainer">
      <a class="homeButton" href="/eshop/index.php">Home Page</a>
    </div>

    <div class="login-page">
      <div class="form">
        <form class="login-form" action="login.php" method="POST">
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="/eshop/registerform.php">Create an account</a></p>
        </form>
      </div>
    </div>

  </body>
</html>


<span><?php echo $error; ?></span>
