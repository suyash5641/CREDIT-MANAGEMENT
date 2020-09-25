<?php  
include "connection.php"; 
include "home.php"; 
?>
<!DOCTYPE html>
<html>
<body>  

<form id="f" action="/update.php" method="POST"> 
<h1>CREDIT TRANSFER</h1>
<label id="send" for="sender">SENDER:</label>
  <select name="s"  >
    
    <option value="USER1">USER1</option>
    <option value="USER2">USER2</option> 
    <option value="USER3">USER3</option>
    <option value="USER4">USER4</option>
    <option value="USER5">USER5</option>
    <option value="USER6">USER6</option>
    <option value="USER7">USER7</option>
    <option value="USER8">USER8</option>
    <option value="USER9">USER9</option>
    <option value="USER10">USER10</option>
  </select><br>
  <label id="recieve" for="reciever">RECIEVER:</label>
  <select name="r" >
    
    <option value="USER10">USER10</option>
    <option value="USER2">USER2</option> 
    <option value="USER3">USER3</option>
    <option value="USER4">USER4</option>
    <option value="USER5">USER5</option>
    <option value="USER6">USER6</option>
    <option value="USER7">USER7</option>
    <option value="USER8">USER8</option>
    <option value="USER9">USER9</option>
    <option value="USER1">USER1</option>
    </select><br> 
    <label id="w" for="amount">AMOUNT</label>
    <input type="number" id="w" name="amt" step="1" min="1"><br><br>
    <input type="submit">
    

</form>  
</body>
</html>
