<?php  
if(isset($_GET['calc'])) {
	$Kanin = 10;
	$ulam1 = 70;
	$ulam2 = 80;
  	$order = $_GET['hm'];
	$money = $_GET['cash'];

	switch ($_GET['order']) {
		case 'Kanin':
			$item_price = $Kanin;
			break;
		case 'pork chaofan':
			$item_price = $ulam1;
			break;
		case 'pork sisig':
			$item_price = $ulam2;
			break;
		default:
			break;
	}
	// Make a variable that stores the total amount in.
	$total_price = $item_price * $order;

	// Compute the change
	$change = $money - $total_price;

	// Display the result
	echo "Total amount of your order is : " . $total_price . "php <br>";
	echo "Your change is : " . $change . "php";
}
?>
