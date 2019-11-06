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

        $token = md5( $_POST["email"] . date("Y-m-d", strtotime('+5 days')));
        array_push($paramsStudent, formatString($token));
        array_push($paramsStudent, formatString(date("Y-m-d", strtotime('+5 days'))));


        $fields =  array("name","lastName","email","password","level","major", "campus", "token", "expire" );


        if(insert($fields, $paramsStudent, "student")){
<<<<<<< HEAD
          session_start();
          $_SESSION["token"] = $token;
          $_SESSION["id"] = $_POST["email"];
          if(isset($_SESSION["token"]) && isset($_SESSION["id"])){
            echo "<script>window.location.replace('http://codechallenge.com.mx/team.php');</script>";
                  }
          }

      }
     ?>
=======
            session_start();
            $_SESSION["token"] = $token;
            $_SESSION["id"] = $_POST["email"];
            header("Location: team.php");
        }
    }
?>
>>>>>>> 4ef6c772e5adbbb311b35855bff5dbdb4525797b



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
                <form action="" method="post" id="reg">
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="" for="fname">Nombre</label>
                            <input type="text" id="fname" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="" for="lname">Apellido</label>
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
                            <label class="" for="">Nivel</label>
                            <select class="form-control" name="level" required>
                                <option value="principiante" selected>Principiante</option>
                                <option value="intermedio">Intermedio</option>
                                <option value="avanzado">Avanzado</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="" for="">Carrera</label>
                            <select class="form-control" name="major" required>
                                <option value="isc" selected>ISC</option>
                                <option value="itc">ITC</option>
                                <option value="iti">ITI</option>
                                <option value="itc">TIE</option>
                                <option value="itc">INT</option>
                                <option value="itc">IRS</option>
                                <option value="isdr">ISDR</option>
                                <option value="itc">IDM</option>
                                <option value="itc">INA</option>
                                <option value="isc">IMT</option>
                                <option value="itc">OTRA</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="" for="">Campus</label>
                            <select class="form-control" name="campus" required>
                                <option value="cem" selected>CEM</option>
                                <option value="ccm" disabled>CCM</option>
                                <option value="csf" disabled>CSF</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn-custom" data-aos="fade-up" style="border: 0px;" data-aos-delay="100" onclick="document.getElementById('reg').submit();"><span>INSCRIBIRSE</span></button>
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
