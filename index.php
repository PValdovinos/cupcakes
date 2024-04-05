<!--
Name: Pedro Valdovinos Reyes, Everett Hanke
Date: 4/4/24
URL: https://pvaldovinos-reyes.greenriverdev.com/328/cupcakes/index.php
Description: Short and sweet cupcake fundraiser page with a receipt that calculates the price of all ordered cupcakes.
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Cupcake Fundraiser</h1>
    <h2>Pedro:</h2>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label>Cupcake Flavors:</label><br>
        <input type="checkbox" name="flavors[]" value="The Grasshopper">The Grasshopper<br>
        <input type="checkbox" name="flavors[]" value="Whiskey Maple Bacon">Whiskey Maple Bacon<br>
        <input type="checkbox" name="flavors[]" value="Carrot Walnut">Carrot Walnut<br>
        <input type="checkbox" name="flavors[]" value="Salted Caramel Cupcake">Salted Caramel Cupcake<br>
        <input type="checkbox" name="flavors[]" value="Red Velvet">Red Velvet<br>
        <input type="checkbox" name="flavors[]" value="Lemon Drop">Lemon Drop<br>
        <input type="checkbox" name="flavors[]" value="Tiramisu">Tiramisu<br><br>

        <input type="submit" value="Order">
    </form>
</div>

</body>
</html>
