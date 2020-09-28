<?php
    include_once 'classes/Product.php';
    $id = $_GET['id'];
    $product = Product::get($id);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $product->title; ?></title>
</head>
<body>
    <article>
        <h1><?php echo $product->title; ?></h1>
        <p><?php echo $product->description; ?></p>
        <img src="<?php echo $product->image; ?>" alt=""?>
    </article>
</body>
</html>