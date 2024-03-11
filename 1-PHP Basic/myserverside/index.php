<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>My Page</h2>




    <?php
    $products = [
        [
            "id" => 1,
            "name" => "apple",
            "price" => 500
        ],
        [
            "id" => 2,
            "name" => "mango",
            "price" => 700
        ],
        [
            "id" => 3,
            "name" => "banana",
            "price" => 200
        ],
        [
            "id" => 4,
            "name" => "Lemon",
            "price" => 300
        ]
    ]
    ?>

    <?php foreach($products as $product): ?>
        <div>
            <h1>
                <?= $product["name"]?>
            </h1>
            <p>
                <?= $product["price"]?>
            </p>
            <hr>
        </div>
    <?php endforeach; ?>




</body>

</html>