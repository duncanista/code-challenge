<?php

include "templates/header.php";
require_once "classes/database.php";

if(!isset($_SESSION["id"])){
  echo "<script>window.location.replace('http://codechallenge.com.mx/login.php');</script>";
}
selectByField("student", "email", $_SESSION["id"]);
?>
<div class="site-section site-hero inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10 margin-top-1">
				<span class="d-block mb-3 caption" data-aos="fade-up">Crea o únete a un equipo</span>
				<h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Equipos</h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-4 ">
				<div class="site-section-heading" data-aos="fade-up" data-aos-delay="100">
					<h2>Proximamente</h2>
				</div>
			</div>
			<div class="col-lg-5 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
				<p>Regresa el 11 de noviembre para formar tu equipo.</p>
			</div>
		</div>

	</div>
</div>

<?php
include "templates/footer.php";

?>
