<?php
    include_once 'classes/Product.php';

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $products = Product::search($search);
    } else {
        $products = Product::getAll();
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiest</title>
</head>
<body>
    <h1>Heist :: Gadget store</h1>

    <nav>
        <form action="" method="get">
            <label for="search">Search by title</label>
            <input type="text" id="search" name="search">
        </form>
    </nav>


    <main class="products">
        <?php foreach ($products as $product): ?>
            <article>
                <h2><?php echo $product->title; ?></h2>
                <p><?php echo $product->description; ?></p>
                <a href="product.php?id=<?php echo $product->id; ?>">
                    <img src="<?php echo $product->image; ?>" alt="<?php echo $product->title; ?>">
                </a>
            </article>
        <?php endforeach; ?>
    </main>

</body>
</html>