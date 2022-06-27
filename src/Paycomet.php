<?php

namespace Paycomet\Sdk;

use Dotenv\Dotenv;

abstract class Paycomet
{
    protected const SHA_512 = 'sha512';

    protected string $merchantCode;
    protected string $terminal;
    protected string $password;
    protected string $ip;
    protected ?string $jetid;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__.'/../');
        $dotenv->load();

        $this->merchantCode = $_ENV['PAYCOMET_MERCHANT_CODE'];
        $this->terminal = $_ENV['PAYCOMET_PASSWORD'];
        $this->password = $_ENV['PAYCOMET_TERMINAL'];
        $this->jetid = empty($_ENV['PAYCOMET_JET_ID']) ? $_ENV['PAYCOMET_JET_ID'] : null;
        $this->ip = $this->getClientIp();
    }

    private function getClientIp(): string
    {
        try {
            return $_SERVER['REMOTE_ADDR'] ??
                $_SERVER['HTTP_X_FORWARDED_FOR'] ??
                $_SERVER['HTTP_X_FORWARDED'] ??
                $_SERVER['HTTP_FORWARDED_FOR'] ??
                $_SERVER['HTTP_FORWARDED'] ??
                $_SERVER['HTTP_CLIENT_IP'] ??
                $_SERVER['SERVER_ADDR'];
        } catch (\Throwable $exception) {

        }

        return '';
    }
}