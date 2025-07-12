<?php
try {
    // Test avec MySQL
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    echo "✓ MySQL fonctionne\n";
} catch (PDOException $e) {
    echo "✗ MySQL : " . $e->getMessage() . "\n";
}

try {
    // Test avec PostgreSQL
    $pdo = new PDO('pgsql:host=localhost;dbname=test', 'postgres', '');
    echo "✓ PostgreSQL fonctionne\n";
} catch (PDOException $e) {
    echo "✗ PostgreSQL : " . $e->getMessage() . "\n";
}
?>