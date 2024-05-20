<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="compu.php" method="GET">
        <h1>TAPSIHAN NI JENES</h1>
        <ul>
          <li>Tapsilog - 100php</li>
          <li>Hotsilog - 90php</li>
          <li>Spamsilog - 120php</li>
        </ul>
        <label for="Order" required>Choose your order:</label>
        <select name="Order" id="Order">
        <option value="Tapsilog" >Tapsilog</option>
        <option value="Hotsilog" >Hotsilog</option>
        <option value="Spamsilog"  >Spamsilog</option>
        </select>
        <br><br>
        <label for="orders">Quatity</label>
        <input type="text" name="hm" required>
        <br><br>
        <label for="money">Cash</label>
        <input type="text" name="cash" required>
        <br><br>
        <input type="submit" value="Submit" name="calc">
      </form>
      
	<a href="logout.php">Logout</a>
</body>
</html>