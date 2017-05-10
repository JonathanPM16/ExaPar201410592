<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
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
     <td><h1>For data scientists</h1></td>
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
  $sql = "SELECT * from servicios";
  $sql1= "SELECT * FROM servicios where codigo_servicio='0001' or codigo_servicio='0002' or codigo_servicio='0003'";
  $sql2= "SELECT * FROM servicios where codigo_servicio='0004' or codigo_servicio='0005' or codigo_servicio='0006'";
  $result1 = $conn->query($sql1);
  $result2 = $conn->query($sql2);
  $result = $conn->query($sql);
  if ($result1->num_rows > 0) {
      // output data of each row
      while($row1 = $result1->fetch_assoc()) {?>
      <tr>
      <td><img src="<?php echo $row1['imagen_servicio']?>"></td>
      <td><?php echo $row1['nombre_servicio']?> </br><?php echo $row1['descripcion_servicio']?> </td>
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
     <td><h1>For IT professionals</h1></td>
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
  $sql = "SELECT * from servicios";
  $sql1= "SELECT * FROM servicios where codigo_servicio='0001' or codigo_servicio='0002' or codigo_servicio='0003'";
  $sql2= "SELECT * FROM servicios where codigo_servicio='0004' or codigo_servicio='0005' or codigo_servicio='0006'";
  $result1 = $conn->query($sql1);
  $result2 = $conn->query($sql2);
  $result = $conn->query($sql);
  if ($result2->num_rows > 0) {
      // output data of each row
      while($row2 = $result2->fetch_assoc()) {?>
      <tr>
      <td><img src="<?php echo $row2['imagen_servicio']?>"></td>
      <td><?php echo $row2['nombre_servicio']?> </br><?php echo $row2['descripcion_servicio']?> </td>
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
