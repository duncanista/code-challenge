<?php

include "templates/header.php";

?>
    <?php require_once "classes/database.php";

      if( $_SERVER["REQUEST_METHOD"] == 'POST'){
        $paramsStudent = array();

        array_push($paramsStudent, formatString($_POST["name"]));
        array_push($paramsStudent, formatString($_POST["lastname"]));
        array_push($paramsStudent, formatString($_POST["email"]));
        array_push($paramsStudent,formatString(md5($_POST["password"])));
        array_push($paramsStudent, formatString($_POST["level"]));
        array_push($paramsStudent, formatString($_POST["major"]));
        array_push($paramsStudent, formatString($_POST["campus"]));


        $fields =  array("name","lastName","email","password","level","major", "campus" );


        if(insert($fields, $paramsStudent, "student")){
          echo '<script language="javascript">';
          echo 'alert("AQUI VA EL MODAL JORDAN")';
          echo '</script>';        }
      }
     ?>



     <div class="site-section site-hero inner">
     	<div class="container">
     		<div class="row align-items-center">
     			<div class="col-md-10 margin-top-1">
     				<span class="d-block mb-3 caption" data-aos="fade-up">Es momento de</span>
     				<h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Inscribirte</h1>
     			</div>
     		</div>
     	</div>
     </div>

     <div class="site-section inner">
     	<div class="container">
     		<div class="row">
     			<div class="col-md-8 offset-md-2" data-aos="fade-up">
     				<form action="" method="post">
     					<div class="row form-group">
     						<div class="col-md-6 mb-3 mb-md-0">
     							<label class="" for="name" >Nombre</label>
     							<input type="text" id="fname" class="form-control" name="name" required>
     						</div>
     						<div class="col-md-6">
     							<label class="" for="lastname">Apellido</label>
     							<input type="text" id="lname" class="form-control" name="lastname" required>
     						</div>
     					</div>

     					<div class="row form-group">

     						<div class="col-md-12">
     							<label class="" for="email">Email</label>
     							<input type="email" id="email" class="form-control" name="email" required>
     						</div>
     					</div>

     					<div class="row form-group">

     						<div class="col-md-12">
     							<label class="" for="subject">Contraseña</label>
     							<input type="password" id="subject" class="form-control" name="password" required>
     						</div>
     					</div>

              <div class="row form-group">

     						<div class="col-md-4">
     							<label class="" for="email">Nivel</label>
                  <select class="form-control" name="level" required>
                    <option value="principiante">Principiante</option>
                    <option value="intermedio">Intermedio</option>
                    <option value="avanzado">Avanzado</option>

                  </select>
     						</div>
                <div class="col-md-4">
     							<label class="" for="email">Carrera</label>
                  <select class="form-control" name="major" required>
                    <option value="isc">ISC</option>
                    <option value="itc">ITC</option>
                    <option value="iti">ITI</option>
                    <option value="isdr">ISDR</option>
                    <option value="isc">ISC</option>
                  </select>
     						</div>
                <div class="col-md-4">
     							<label class="" for="email">Campus</label>
                  <select class="form-control" name="campus" required>
                    <option value="cem">CEM</option>
                    <option value="ccm">CCM</option>
                    <option value="csf">CSF</option>
                  </select>
     						</div>
     					</div>

     					<div class="row form-group">
     						<div class="col-md-12">
     							<input type="submit" value="Inscribir" class="btn btn-primary py-2 px-4 text-white">
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
