<!DOCTYPE html>
 <html>
 <head>
  <title>Examen Parcial Soluciones Moviles y Cloud</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <div align="middle">
  <img src="images/cabecera.png">
  </div>
  <table>
   <tr>
   <td>
   <table>
    <tr>
     <td width="100%"><h3>For data scientists</h3></td>
    </tr>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql1= "SELECT * FROM servicios where codigo_servicio='0001' or codigo_servicio='0002' or codigo_servicio='0003'";
  $result1 = $conn->query($sql1);
  if ($result1->num_rows > 0) {
      // output data of each row
      while($row1 = $result1->fetch_assoc()) {?>
      <tr>
      <td width="30%"><img src="<?php echo $row1['imagen_servicio']?>"></td>
      <td width="70%"><?php echo $row1['nombre_servicio']?> </br><?php echo $row1['descripcion_servicio']?> </td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </td>
    <td>
    <table>
     <td width="100%"><h3>For IT professionals</h3></td>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql2= "SELECT * FROM servicios where codigo_servicio='0004' or codigo_servicio='0005' or codigo_servicio='0006'";
  $result2 = $conn->query($sql2);
  if ($result2->num_rows > 0) {
      // output data of each row
      while($row2 = $result2->fetch_assoc()) {?>
      <tr>
      <td width="30%"><img src="<?php echo $row2['imagen_servicio']?>"></td>
      <td width="70%"><?php echo $row2['nombre_servicio']?> </br><?php echo $row2['descripcion_servicio']?> </td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </td>
 </tr>
 </table>
  <div align="middle">
  <img src="images/piepagina.png">
   </div>
 </body>
 </html>
