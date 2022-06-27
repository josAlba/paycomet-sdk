<?php

namespace Paycomet\Sdk\Models\SOAP;

class AddUserResponse
{
    private ?string $DS_IDUSER;
    private ?string $DS_TOKEN_USER;
    private ?string $DS_ERROR_ID;

    public function __construct(string $idUser, string $tokenUser, string $errorId)
    {
        $this->DS_IDUSER = $idUser;
        $this->DS_TOKEN_USER = $tokenUser;
        $this->DS_ERROR_ID = $errorId;
    }

    public function getDSIDUSER(): ?string
    {
        return $this->DS_IDUSER;
    }

    public function getDSTOKENUSER(): ?string
    {
        return $this->DS_TOKEN_USER;
    }

    public function getDSERRORID(): ?string
    {
        return $this->DS_ERROR_ID;
    }

    public function isError(): bool
    {
        if ($this->DS_ERROR_ID === null) {
            return false;
        }

        if (!empty($this->DS_ERROR_ID) && $this->DS_ERROR_ID !== 0) {
            return true;
        }

        return false;
    }
}