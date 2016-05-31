<?php include 'sections/header.inc'; ?>
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 text-center">
    		<h1>Módulo de Materias</h1>
    		<hr>
              <?php  include 'db/connection.php';?>
              <table class="table table-bordered table-striped table-hover">
              	 <thead>
              	 	<tr>
              	 		<th style="text-align: center;">Lista</th>
              	 		<th style="text-align: center;">Nombre materia</th>
              	 	</tr>
              	 </thead>
              	 <tbody>
              	 	<?php 
                       $sql = "SELECT * FROM materias";
                       $rsl = mysqli_query($conn, $sql);
                       while ( $row = mysqli_fetch_array($rsl)) {
                    ?>

                       
                       	 <tr>
                       	 	<td><?php echo $row['idm']; ?></td>
                       	 	<td><?php echo $row['nombre']; ?></td>
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