<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php
include "connection.php"; 
include "home.php"; 
include "heading.php";
$selectquery="select * from userdata "; 
$query=mysqli_query($c,$selectquery); 

while($res=mysqli_fetch_array($query))
{
?> 
<table >
<tr>
    <td><?php echo$res['NAME'];?></td>  
    <td><?php echo$res['EMAIL'];?></td> 
    <td><?php echo$res['CREDIT'];?></td> 
</tr>  
</table> 
<?php
} 
?>   

</html>

