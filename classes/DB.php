<?php
    abstract class DB
    {
        private static $conn;

        public static function getConnection()
        {
            include_once __DIR__.'/../config/database.php';
            if (isset(self::$conn)) {
                return self::$conn;
            }

            self::$conn = new PDO('mysql:host='.$DB['host'].';dbname=heist', $DB['user'], $DB['password']);

            return self::$conn;
        }
    }
