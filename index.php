<html>
<body>
<link rel="stylesheet" href="/css/tables.css">
<div>
<?php 

$mysqli = new mysqli('127.0.0.1', 'root', '', 'record'); 
$query = "SELECT * FROM users";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Last Name</font> </td> 
          <td> <font face="Arial">User Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Password</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['ID'];
        $field2name = $row['FirstName'];
        $field3name = $row["LastName"];
        $field4name = $row["UserName"];
        $field5name = $row["Email"]; 
        $field6name = $row["Password"]; 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>
                  <form action="delete.php" method="POST">
                  <input type = "hidden" name="id_to_delete" value='.$field1name.' >
                  <input type = "hidden" name="firstname_to_edit" value='.$field2name.' >
                  <input type = "hidden" name="lastname_to_edit" value='.$field3name.' >
                  <input type = "hidden" name="username_to_edit" value='.$field4name.' >
                  <input type = "hidden" name="email_to_edit" value='.$field5name.' >
                  <input type = "hidden" name="password_to_edit" value='.$field6name.' >
                  <input type ="submit" name = "edit" value="Edit">
                  <input type ="submit" name = "delete" value="Delete">
                  </form>
                  </td>
              </tr>';
    }
    $result->free();
} 
?>
</div>
<div class="center">
<button onclick="location.href = 'createUser.php';" id="myButton" class="float-center submit-button" >Manual Addition</button>
<button onclick="location.href = 'createUserbyAPI.php';" id="myButton" class="float-center submit-button" >API Addition</button>
</div>
</body>
</html>