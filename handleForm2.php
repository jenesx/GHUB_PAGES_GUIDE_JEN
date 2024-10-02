<?php
// Prices for the menu items
$prices = [
    "Sinigang with rice" => 150,
    "Adoo with rice" => 170,
    "Beef Steak with rice" => 175
];

// Check if form data is submitted properly
if (isset($_POST['order']) && isset($_POST['quantity']) && isset($_POST['cash'])) {
    
    // Retrieve form data
    $order = $_POST['order'];
    $quantity = (int) $_POST['quantity']; 
    $cash = (int) $_POST['cash']; 

    // Validate that quantity and cash are positive integers
    if ($quantity <= 0 || $cash < 0) {
        echo "Invalid input: Quantity and Cash must be positive numbers.";
        exit;
    }

    // Check if the order exists in the prices array
    if (!array_key_exists($order, $prices)) {
        echo "Invalid order selection.";
        exit;
    }

    // Calculate the total price
    $totalPrice = $prices[$order] * $quantity;

    // Check if cash is enough to cover the total price
    if ($cash < $totalPrice) {
        echo "<h1>RECEIPT</h1>";
        echo "Total Price: " . $totalPrice . "<br>";
        echo "You Paid: " . $cash . "<br>";
        echo "<strong>ERROR:</strong> Sorry, your balance is not enough. You need more " . ($totalPrice - $cash) . " to complete the purchase.<br>";
    } else {
        // Calculate the change
        $change = $cash - $totalPrice;

        // Display the receipt
        echo "<h1>RECEIPT</h1>";
        echo "Total Price: " . $totalPrice . "<br>";
        echo "You Paid: " . $cash . "<br>";
        echo "CHANGE: " . $change . "<br>";

        // Display the current date and time
        date_default_timezone_set("Asia/Manila");
        echo date("m/d/Y h:i:s a", time());
    }
} else {
    // Handle cases where form data is missing
    echo "Please submit the form properly with all fields filled in.";
}
?>
