<?php
$contact = "class='active'";
include "templates/header.php";

?>

<div class="site-section site-hero inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10 margin-top-1">
				<span class="d-block mb-3 caption" data-aos="fade-up">Queremos escucharte</span>
				<h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Contáctanos</h1>
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
							<label class="" for="fname">Nombre</label>
                            <input type="text" id="fname" class="form-control" style="color: white !important;">
						</div>
						<div class="col-md-6">
							<label class="" for="lname">Apellido</label>
							<input type="text" id="lname" class="form-control">
						</div>
					</div>

					<div class="row form-group">

						<div class="col-md-12">
							<label class="" for="email">Email</label>
							<input type="email" id="email" class="form-control">
						</div>
					</div>

					<div class="row form-group">

						<div class="col-md-12">
							<label class="" for="subject">Asunto</label>
							<input type="subject" id="subject" class="form-control">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label class="" for="message">Mensaje</label>
							<textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
                            <a href="#" class="btn-custom" data-aos="fade-up"><span>ENVIAR MENSAJE</span></a>
						</div>
					</div>


				</form>
			</div>
			<div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
				<div class="p-4 mb-3">
					<p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Tec de Monterrey, CEM</p>
					<p class="mb-4">Av Lago de Guadalupe KM 3.5, Margarita Maza de Juárez, 52926 Cd López Mateos, Méx.</p>

					<p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Correo de CC19</p>
					<p class="mb-0"><a href="#">info@codechallenge.com.mx</a></p>

				</div>
			</div>
		</div>
	</div>
</div>

<?php

include "templates/footer.php";

?>