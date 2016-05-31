<?php include 'sections/header.inc'; ?>
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 text-center">
    		<h1>Módulo de Notas</h1>
    		<hr>
              <?php  include 'db/connection.php';?>
              <table class="table table-bordered table-striped table-hover">
              	 <thead>
              	 	<tr>
              	 		<th style="text-align: center;">Lista notas</th>
              	 		<th style="text-align: center;">Nota 1</th>
              	 		<th style="text-align: center;">Nota 2</th>
              	 		<th style="text-align: center;">Nota 3</th>
                    <th style="text-align: center;">Documento</th>
              	 	</tr>
              	 </thead>
              	 <tbody>
              	 	<?php 
                       $sql = "SELECT * FROM notas";
                       $rsl = mysqli_query($conn, $sql);
                       while ( $row = mysqli_fetch_array($rsl)) {
                    ?>

                       
                       	 <tr>
                       	 	<td><?php echo $row['idn']; ?></td>
                       	 	<td><?php echo $row['nt1']; ?></td>
                       	 	<td><?php echo $row['nt2']; ?></td>
                       	 	<td><?php echo $row['nt3']; ?></td>
                          <td><?php echo $row['uid']; ?></td>
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