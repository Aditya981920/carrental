<?php
define('DB_HOST', 'bdsn0q42sxbm1wlpmpae-mysql.services.clever-cloud.com');
define('DB_NAME', 'bdsn0q42sxbm1wlpmpae');
define('DB_USER', 'uswz2latdyj49um0');
define('DB_PASS', '08pjRXsfMPmvZJTnyLTE'); // 👈 paste exact password

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

            // ✅ CORRECT WAY FOR CLEVER CLOUD
            PDO::MYSQL_ATTR_SSL_CA => null,
            PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        ]
    );
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
