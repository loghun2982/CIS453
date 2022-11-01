<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery App</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="nav fixed-top">
            <ul class="navbar">
                <li><a href="/Grocery/GroceryApp/index.php">Produce</a></li>
                <li><a href="/Grocery/GroceryApp/Dairy.php">Dairy</a></li>
                <li><a href="/Grocery/GroceryApp/Seafood.php">Seafood</a></li>
                <li><a href="/Grocery/GroceryApp/Meat.php">Meat</a></li>
                <li id="checkout">Checkout</li>
            </ul>
        </nav>
    </header>

    <div class="produceForm">
        <h1 id="formTitle">Produce</h1>
        <form action="">

            <table>
                <tr>
                    <td>Lettuce</td>
                    <td><input type="number" name="lettuce" min="0" max="50"></td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tomatoes</td>
                    <td><input type="number" name="tomatoes" min="0" max="50"></td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Onions</td>
                    <td><input type="number" name="Onions" min="0" max="50"></td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Cucumber</td>
                    <td><input type="number" name="Cucumber" min="0" max="50"></td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Strawberry</td>
                    <td><input type="number" name="Strawberry" min="0" max="50"></td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Bananas</td>
                    <td><input type="number" name="Bananas" min="0" max="50"></td>
                    <td>$0.00</td>
                </tr>

            </table>

        </form>
        <input id="submitButton" type="submit" name="submit" value="Add to Order">
    </div>
</body>

</html>