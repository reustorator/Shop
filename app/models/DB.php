<?php
    class DB {
        private static $_db = null;

        public static function getInstence() {
            if(self::$_db == null)
                self::$_db = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'root');

            return self::$_db;
        }

        public function __construct() {}
        public function __clone() {}
        public function __wakeup() {}

    }