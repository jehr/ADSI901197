<?php include 'config/init.inc'; 
     
     include 'sections/header.inc';

?>
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 text-center">
    		<h1>Módulo de Usuarios</h1>
    		<hr>
    		<ol class="breadcrumb">
    			<li><a href="index.php">Inicio</a></li>
    			<li class="active">Usuarios</li>
    		</ol>
    		<hr>
    		<a class="btn btn-success" href="users/add.php">
    			<i class="glyphicon glyphicon-plus"></i>
    			Adiccionar Usuario</a>
    		<hr>
              <?php  include 'db/connection.php';?>
              <table class="table table-bordered table-striped table-hover">
              	 <thead>
              	 	<tr>
              	 		<th style="text-align: center;">Documento</th>
              	 		<th style="text-align: center;">Nombre Completo</th>
              	 		<th style="text-align: center;">Correo Electronico</th>
              	 		<th style="text-align: center;">Estado</th>
              	 		<th style="text-align: center;">Acciones</th>
              	 	</tr>
              	 </thead>
              	 <tbody>
              	 	<?php 
                       $sql = "SELECT * FROM usuarios";
                       $rsl = mysqli_query($conn, $sql);
                       while ( $row = mysqli_fetch_array($rsl)) {
                    ?>

                       
                       	 <tr>
                       	 	<td><?php echo $row['idu']; ?></td>
                       	 	<td><?php echo $row['nombres']; ?></td>
                       	 	<td><?php echo $row['correo']; ?></td>
                       	 	<td>
                       	 		<?php if($row['estado'] == 'Activo'): ?>
                                   <span class="label  label-success">
                                   	 <i class="glyphicon glyphicon-user"></i>
                                   </span>
                                <?php else: ?>
                                <span class="label label-danger">
                                	<i class="glyphicon glyphicon-user"></i>
                                </span>
                       	 	    <?php endif ?>
                       	 	</td>
                       	 	<td>
                       	 		<a class="btn btn-sm btn-default" href="">
                       	 			<i class="glyphicon glyphicon-search"></i>
                       	 		</a>
                       	 		<a class="btn btn-sm btn-default" href="">
                       	 			<i class="glyphicon glyphicon-pencil"></i>
                       	 		</a>
                       	 		<a class="btn btn-sm btn-danger" href="">
                       	 			<i class="glyphicon glyphicon-trash"></i>
                       	 		</a>
                       	 	</td>
                       	 </tr>
                    <?php
                       }
              	 	?>
              	 </tbody>
              </table>
              <?php  include 'db/disconnection.php';?>
    	</div>
    </div>
<?php include 'sections/footer.inc';?>