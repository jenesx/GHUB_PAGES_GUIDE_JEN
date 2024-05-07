<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Getting the Discriminant Value Calculator</title>
</head>
<body>
    <form action="GET.php" method="GET">
        <h1>Welcome to Karinderya ni aling Jenes</h1>
        <ul>
          <li>Kanin - 10php</li>
          <li>pork chaofan - 50php</li>
          <li>pork sisig - 70php</li>
        </ul>
        <label for="order" required>Choose your order:</label>
        <select name="order" id="order">
        <option value="Kanin" >Kanin</option>
        <option value="pork chaofan" >pork chaofan</option>
        <option value="pork sisig"  >pork sisig</option>
        </select>
        <br><br>
        <label for="orders">how many oder will you take?</label>
        <input type="text" name="hm" required>
        <br><br>
        <label for="money">bayad po</label>
        <input type="text" name="cash" required>
        <br><br>
        <input type="submit" value="Submit" name="calc">
      </form>
</body>
</html>

