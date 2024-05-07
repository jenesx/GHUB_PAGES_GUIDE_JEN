<?php  
if(isset($_GET['calc'])) {

  $a = $_GET['A'];
	$b = $_GET['B'];
	$c = $_GET['C'];

	// Create a variable to store the sum.
	$discriminant = $b * $b - 4 * $a * $c;

	// Print the result
	echo "<h2>The answer will be  " . $discriminant . "</h2>";
}
?>
