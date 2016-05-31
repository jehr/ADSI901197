<?php 
     include 'config/init.inc'; 
     
     include 'sections/header.inc';

?>
    <div class="row">
    	<div class="col-md-6  col-md-offset-3 text-center">
    	   <h1>CRUD (PHP&MYSQL)</h1>
    	   <hr>
    	   <a class="btn btn-lg btn-block btn-default" href="users.php"><i class="glyphicon  glyphicon-user ">   </i>  Módulo Usuario </a>
    	   <br>
    	   <a class="btn btn-lg btn-block btn-success" href="materias.php"><i class="glyphicon  glyphicon-book ">   </i>  Módulo Materias </a>
    	   <br>
    	   <a class="btn btn-lg btn-block btn-danger" href="notas.php"><i class="glyphicon   glyphicon-check ">  </i>  Módulo Notas </a>
    	   <br>
    	   <a class="btn btn-lg btn-block btn-primary" href=""><i class="glyphicon  glyphicon-search "> </i>  Módulo Consultas </a>
    	   <br>

    	</div>
    </div>
<?php include 'sections/footer.inc'; ?>