<?php

namespace Paycomet\Sdk\Models;

class PaycometConfiguration
{
    private string $merchantCode;
    private string $terminal;
    private string $password;
    private ?string $ip;
    private ?string $jetId;

    public function __construct(
        string $merchantCode,
        string $terminal,
        string $password,
        ?string $ip = null,
        ?string $jetId = null
    ) {
        $this->merchantCode = $merchantCode;
        $this->terminal = $terminal;
        $this->password = $password;
        $this->ip = $ip;
        $this->jetId = $jetId;
    }

    public function getMerchantCode(): string
    {
        return $this->merchantCode;
    }

    public function getTerminal(): string
    {
        return $this->terminal;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getIp(): string
    {

        return $this->ip ?? $this->getClientIp();
    }

    public function getJetId(): ?string
    {
        return $this->jetId;
    }

    public function getClientIp()
    {
        return $_SERVER['REMOTE_ADDR'] ??
            $_SERVER['HTTP_X_FORWARDED_FOR'] ??
            $_SERVER['HTTP_X_FORWARDED'] ??
            $_SERVER['HTTP_FORWARDED_FOR'] ??
            $_SERVER['HTTP_FORWARDED'] ??
            $_SERVER['HTTP_CLIENT_IP'] ??
            $_SERVER['SERVER_ADDR'];
    }
}