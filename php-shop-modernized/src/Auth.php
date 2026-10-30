<?php
declare(strict_types=1);

final class Auth
{
    public function hash(string $secret): string
    {
        return password_hash($secret, PASSWORD_DEFAULT);
    }

    public function check(string $secret, string $hash): bool
    {
        return password_verify($secret, $hash);
    }
}
