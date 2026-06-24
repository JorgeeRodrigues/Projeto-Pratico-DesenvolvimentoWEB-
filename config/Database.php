<?php

// Responsável por criar a conexão com o banco usando variáveis do .env
class Database
{
    public PDO $connection;

    public function __construct()
    {
        $this->loadEnvFile(__DIR__ . '/../.env');

        $driver = getenv('DB_DRIVER') ?: 'pgsql';
        $host   = getenv('DB_HOST') ?: 'localhost';
        $port   = getenv('DB_PORT') ?: '5432';
        $db     = getenv('DB_NAME') ?: 'petshop';
        $user   = getenv('DB_USER') ?: 'postgres';
        $pass   = getenv('DB_PASS') ?: '1234';
        $charset = getenv('DB_CHARSET') ?: 'utf8';

        // Monta DSN
        if ($driver === 'pgsql') {
            $dsn = "pgsql:host=$host;port=$port;dbname=$db";
        } else {
            $dsn = "$driver:host=$host;port=$port;dbname=$db;charset=$charset";
        }

        try {
            $this->connection = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            throw new PDOException(
                "Erro ao conectar com o banco de dados. Verifique seu arquivo .env. " .
                $e->getMessage()
            );
        }
    }

    private function loadEnvFile(string $path): void
    {
        if (!file_exists($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            $line = trim($line);

            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }

            [$key, $value] = array_pad(explode('=', $line, 2), 2, '');

            $key = trim($key);
            $value = trim($value);

            if ($key !== '') {
                putenv("$key=$value");
                $_ENV[$key] = $value;
            }
        }
    }
}