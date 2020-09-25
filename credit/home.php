<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
 <style>
* {
  box-sizing: border-box;
}



    body{
        background-image:url("img23.png");
        background-position: center;
       background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        height:auto;
        margin:0;
    } 
    #f{ 
      width:600px; 
      height:380px; 
      padding:40px;
      margin:40px;  
      box-sizing: border-box;
      background-image: url("p1.png");
      background-repeat:no-repeat;  
      background-size:cover; 
      font-weight: bold;
    }  
   
   table{
       width:60%; 
      font-size:18px;
      border-collapse:collapse; 
      table-layout:fixed; 
      margin-left:50px;
     
     
   }
   .intro{
    
     background-color:#D3D3D3;
     margin:40px;
     padding:40px; 
     height:250px;
     overflow: hidden;
     width:900px;
   } 
   .intro p{
    font-size:17px;
   }
  
    #f p{
      margin:0;
      color:black; 
      font-size:18px;
    }
  
   #send,#recieve,#w{
      margin:5px;  
     
     
      
   } 

   #amount{
     margin-left:5px; 
     height:5px; 
   }
   #submit{
    margin-left:20px;
   }
      
        tr{
            align-content: center; 
            margin:0;
           
        }  
       
        h2{
         
          margin-left:20px; 
          background-color:white;
          width:auto; 
          align-content: center; 
        }
   
    table:nth-child(odd)
    {
    background-color:#add8e6;
    } 
    table:nth-child(even)
    {
    background-color:white;
    }  
    th{
        background-color:#e6add8; 
    }
    table,th,td{
        
        border: 1px solid black; 
        height:auto; 
        
         } 
        
         .topnav {
  overflow: hidden;
  margin-top:10px;
  margin-bottom:40px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px; 
  border-radius:10px ;
  background-color:green; 
  padding:10px; 
  margin-left:20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) 
{
  .topnav{
     
      overflow-y: hidden;
      position: relative; 
      
  }
  .topnav a{
 
  font-size:17px; 
  text-align: center;
    float: none;
    padding:2px;
  } 
 #myTopnav.topnav{
     width:550px;
    
 }

}
@media screen and (max-width: 600px) 
{
  .intro{
        width:80%;
        
      overflow-y: hidden;
      position: relative;
      font-size:14px;
  }
}



  
  
@media screen and (max-width:750px) {
 table{
      
      width:360px; 
      font-size:14px;
      overflow-y: hidden;
      padding:0;
      margin:0;
 
     
     
} 


}


  </style> 
<body> 
<div class="topnav" id="myTopnav" >
  <a href="index.php" >HOME</a>
  <a href="display.php">VIEW USER</a>
  <a href="transaction.php">TRANSACTION HISTORY</a>
  <a href="transfercredit.php">TRANSFER</a>
</div> 

<script>
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
</body>
</html> 
