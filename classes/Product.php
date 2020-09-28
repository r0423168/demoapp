<?php

include_once __DIR__.'/DB.php';
class Product
{
    public static function getAll()
    {
        $conn = DB::getConnection();
        $sql = 'select * from products';
        $result = $conn->query($sql);

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public static function search($searchTerm)
    {
        $conn = DB::getConnection();
        $sql = "select * from products where title LIKE '%$searchTerm%'";
        echo $sql;
        $result = $conn->query($sql);

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public static function get($id)
    {
        $conn = DB::getConnection();
        $statement = "select * from products where id = $id";

        $result = $conn->query($statement);

        return $result->fetch(PDO::FETCH_OBJ);
    }
}
