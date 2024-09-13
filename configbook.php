<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  
</body>
</html>
<?php

$connection = mysqli_connect('localhost','root','','obs_db');
$db = mysqli_select_db($connection,'obs_db');
$req="SELECT * FROM book_form";
$query=mysqli_query($connection,$req);
?>
<form method='POST'>
    <center>
      <table border="1">
        <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
          <th>address</th>
          <th>danismak</th>
          <th>sure</th>
          <th>tarih</th>
          <th>saat</th>
        </tr>
 
<?php        
  while($fetch =mysqli_fetch_assoc($query)){
    echo '<tr>';
    echo "<td>".$fetch['id'] ."</td>";
    echo '<td>'.$fetch['name'] ."</td>";
  echo "<td>".$fetch['email'] ."</td>";
    echo "<td> :".$fetch['phone'] ."</td>";
    echo "<td> :".$fetch['address'] ."</td>";
    echo "<td> :".$fetch['danismak'] ."</td>";
    echo "<td> :".$fetch['sure'] ."</td>";
    echo "<td> :".$fetch['tarih'] ."</td>";
    echo "<td> :".$fetch['saat'] ."</td>";

    echo '</tr>';
  }



  ?>
  
    
  </table>
    </center>
</form>
</body>
</html>