<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$id = (int) ($_GET['id'] ?? 0);
$db = new Database(new PDO(getenv('DB_DSN') ?: 'sqlite::memory:'));
$product = $db->product($id);
require __DIR__ . '/../templates/shop.html.php';
