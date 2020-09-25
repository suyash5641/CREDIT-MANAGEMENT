 
<?php
include "connection.php"; 
include "home.php"; 

if(isset($_POST['s']) && isset($_POST['r'])  && isset($_POST['amt']))
{
    $p=$_POST["s"];
    $q=$_POST["r"]; 
    $amt=$_POST["amt"];
}
if($p!=$q)
{
$selectquery="select NAME,CREDIT from userdata  WHERE NAME='$p'"; 
$query=mysqli_query($c,$selectquery); 
$selectquery1="select NAME,CREDIT from userdata  WHERE NAME='$q'"; 
$query1=mysqli_query($c,$selectquery1); 
$v=$amt;
while($res1=mysqli_fetch_array($query))
{
    $a=$res1['CREDIT']; 
} 
while($res=mysqli_fetch_array($query1))
{
    $b=$res['CREDIT']; 
}  
if($a-$v>0)
{ 
    $sql = "UPDATE userdata SET CREDIT=$a-$v WHERE NAME='$p'"; 
    $sql1 = "UPDATE userdata SET CREDIT=$b+$v WHERE NAME='$q'";
    if ($c->query($sql) === TRUE && $c->query($sql1) === TRUE)
    {
     
    $sql3 = "INSERT INTO transfer (sender,reciever,amount)
    VALUES ('$p','$q',$v)"; 
    if ($c->query($sql3) === TRUE) 
    {
        
        
        include "connection.php";
        include "t.php";
        
       
    } 
    } 
    else
    {
    echo "Error updating record: " . $c->error;
    }
} 
else 
{
    include "connection.php";
    include "balance.php";
}
}
else{
    include "connection.php";
    include "text.php";
}
?> 
