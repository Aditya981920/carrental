<?php
define('DB_HOST', getenv("DB_HOST"));
define('DB_USER', getenv("DB_USER"));
define('DB_PASS', getenv("DB_PASS"));
define('DB_NAME', getenv("DB_NAME"));
define('DB_PORT', getenv("DB_PORT") ?: 3306);

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
} catch (PDOException $e) {
    exit("DB Error: " . $e->getMessage());
}
?>
