<?php
declare(strict_types=1);

final class Database
{
    public function __construct(private PDO $pdo) {}

    public function product(int $id): ?array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
}
