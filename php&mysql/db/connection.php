<?php 

   $conn = mysqli_connect('localhost', 'root', '', 'adsi901197');

   if(mysqli_connect_errno()) {
   	echo "Error al conectar a MySQL: ".mysqli_connect_error();
    }
