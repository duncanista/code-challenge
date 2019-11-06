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
<?php
$contact = "class='active'";
include "templates/header.php";

?>

<div class="site-section site-hero inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10 margin-top-1">
				<span class="d-block mb-3 caption" data-aos="fade-up">Entra a tu página</span>
				<h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Iniciar Sesión</h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6" data-aos="fade-up">
				<form action="#">
					<div class="row form-group">
						<div class="col-md-6 mb-3 mb-md-0">
							<label class="" for="email">Correo</label>
                            <input type="text" id="email" name="email" class="form-control" style="color: white !important;" required>
						</div>
						<div class="col-md-6">
							<label class="" for="password">Contraseña</label>
							<input type="password" id="password" name="password" class="form-control" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
                            <button type="submit" class="btn-custom" data-aos="fade-up" style="border: 0px;"><span>INICIAR SESIÓN</span></button>
						</div>
					</div>


				</form>
			</div>

		</div>
	</div>
</div>

<?php

include "templates/footer.php";

?>

