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

$conn = mysqli_connect('localhost','root','','obs_db');
$db = mysqli_select_db($conn,'user_db');
$req="SELECT * FROM user_form";
$query=mysqli_query($conn,$req);
?>
<form method='POST'>
    <center>
      <table border="1">
        <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
          <th>password</th>
          <th>user_type</th>
        </tr>
 
<?php        
  while($fetch =mysqli_fetch_assoc($query)){
    echo '<tr>';
    echo "<td>".$fetch['id'] ."</td>";
    echo '<td>'.$fetch['name'] ."</td>";
  echo "<td>".$fetch['email'] ."</td>";
    echo "<td> :".$fetch['password'] ."</td>";
    echo "<td> :".$fetch['user_type'] ."</td>";

    
    echo '</tr>';
  }


  ?>
    
  </table>
    </center>
</form>
</body>
</html>