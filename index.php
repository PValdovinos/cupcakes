<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <h1>Cupcake Fundraiser</h1>
    <h2>Pedro:</h2>
</head>
<body>

<form action="process_order.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label>Cupcake Flavors:</label><br>
    <input type="checkbox" name="flavors[]" value="Chocolate">Chocolate<br>
    <input type="checkbox" name="flavors[]" value="Vanilla">Vanilla<br>
    <input type="checkbox" name="flavors[]" value="Strawberry">Strawberry<br>
    <input type="checkbox" name="flavors[]" value="Red Velvet">Red Velvet<br>
    <input type="checkbox" name="flavors[]" value="Lemon">Lemon<br><br>

    <input type="submit" value="Order">
</form>

</body>
</html>
