<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $cupcake_flavors = isset($_POST['flavors']) ? $_POST['flavors'] : [];

    // Define cupcake prices
    $cupcake_prices = [
        "The Grasshopper" => 3.50,
        "Whiskey Maple Bacon" => 3.50,
        "Carrot Walnut" => 3.50,
        "Salted Caramel Cupcake" => 3.50,
        "Red Velvet" => 3.50,
        "Lemon Drop" => 3.50,
        "Tiramisu" => 3.50
    ];

    // Calculate total amount
    $total_amount = 0;
    $ordered_cupcakes = [];
    foreach ($cupcake_flavors as $flavor) {
        if (isset($cupcake_prices[$flavor])) {
            $total_amount += $cupcake_prices[$flavor];
            $ordered_cupcakes[] = $flavor;
        }
    }

    // Thank you message
    echo "<h2>Thank You, $name!</h2>";
    echo "<p>You have ordered the following cupcakes:</p>";
    echo "<ul>";
    foreach ($ordered_cupcakes as $cupcake) {
        echo "<li>$cupcake</li>";
    }
    echo "</ul>";
    echo "<p>Your total amount is: $" . number_format($total_amount, 2) . "</p>";
} else {
    // Redirect if accessed directly
    header("Location: index.php");
    exit;
}
?>