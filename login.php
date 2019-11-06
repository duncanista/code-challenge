<?php

require_once "classes/database.php";

session_start();
$_SESSION["hello"] = "hola mundo";

if( $_SERVER["REQUEST_METHOD"] == 'POST'){
  $paramsStudent = array();
  $pass = md5($_POST["password"]);
  $email = $_POST["email"];
  $sql = "SELECT idStudent FROM student WHERE email='$email' AND password='$pass'";
  $result = simpleQuery($sql);
  if($result->num_rows > 0){
    echo "SI";
    session_start();
    $_SESSION["id"] = $email;
    header("Location: team.php");
  }
  else{
    echo "NO";
  }


}

?>
<div class="site-section inner">
  <div class="container">
      <div class="row">
        <form class="" action="" method="post">
          <input type="email" name="email" value="">
          <input type="password" name="password" value="">
          <input type="submit" name="" value="">
        </form>
      </div>
    </div>
</div>
