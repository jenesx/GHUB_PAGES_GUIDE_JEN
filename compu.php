<?php  
session_start();
if(isset($_GET['calc'])) {
	$tapsilog = 100;
	$hotsilog = 90;
	$spamsilog = 120;
  	$order = $_GET['hm'];
	$money = $_GET['cash'];

	switch ($_GET['order']) {
		case 'Tapsilog':
			$item_price = $tapsilog;
			break;
		case 'Hotsilog':
			$item_price = $hotsilog;
			break;
		case 'Spamsilog':
			$item_price = $spamsilog;
			break;
		default:
			break;
	}
	// Create a variable to store the sum.
	$total_price = $item_price * $order;

	// Calculate change.
	$change = $money - $total_price;

	// Print the result
	echo "Total : " . $total_price . "php <br>";
	echo "Change : " . $change . "php <br>";
	echo "Thank You For Ordering. Come Again<br>";
	echo "Have A Nice Day " . $_SESSION['username'] . "!";
}
?>