<?php

namespace Paycomet\Sdk\Models;

class User
{
    private string $userId;
    private string $token;

    /**
     * @param string $userId  Id del usuario en PAYCOMET
     * @param string $token  Token del usuario en PAYCOMET
     */
    public function __construct(string $userId, string $token)
    {
        $this->userId = $userId;
        $this->token = $token;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getToken(): string
    {
        return $this->token;
    }
}