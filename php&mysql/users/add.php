<?php 
      include '../config/init.inc';

      include '../sections/header.inc';
 ?>

<div class="row">
    	<div class="col-md-8 col-md-offset-2 text-center">
    		<h1>Adiccionar Usuarios</h1>
    		<hr>
    		<ol class="breadcrumb">
    			<li><a href="../index.php">Inicio</a></li>
    			<li><a href="../users.php">Usuarios</a></li>
    			<li class="active">Adiccionar Usuarios</li>
    		</ol>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <input type="number" class="form-control" name="idu"
                    placeholder="Documento de Identidad" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombres"
                    placeholder="Nombre Completo" required>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="fnacimiento"
                    placeholder="Fecha nacimiento" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="correo"
                    placeholder="Correo Electronico" required>
                </div>
                
                <div class="from-group">
                    <input type="hidden" class="form-control" name="rol" value="Aprendiz">
                    <input type="hidden" class="form-control" name="estado" value="Activo">
                    <input type="submit" class="btn btn-success"  value="Guardar">
                    <input type="reset" class="btn btn-default"  value="Limpiar">
                </div>
            </form>

              <?php  include '../db/connection.php';?>
              <?php 
                 if($_POST) {
                    $idu =  $_POST['idu'];
                    $nombres =  $_POST['nombres'];
                    $fnacimiento =  $_POST['fnacimiento'];
                    $correo =  $_POST['correo'];
                    $rol =  $_POST['rol'];
                    $estado =  $_POST['estado'];

                    $sql = "INSERT INTO usuarios VALUES (
                            $idu, '$nombres', '$fnacimiento', '$correo',  '$rol', '$estado')";

                    if(mysqli_query($conn, $sql)) {
                        echo "<script>";
                        echo "alert('Usuario Adicionado con Exito!');";
                        echo "window.location.replace('../users.php');";
                        echo "</script>";
                    }
                 }
               ?>
              <?php  include '../db/disconnection.php';?>
    	</div>
    </div>

<?php include '../sections/footer.inc' ?>
