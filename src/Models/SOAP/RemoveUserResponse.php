<?php

namespace Paycomet\Sdk\Models\SOAP;

class RemoveUserResponse
{
    private ?int $DS_RESPONSE;
    private ?int $DS_ERROR_ID;

    public function __construct(?int $DS_RESPONSE, ?int $DS_ERROR_ID)
    {
        $this->DS_RESPONSE = $DS_RESPONSE;
        $this->DS_ERROR_ID = $DS_ERROR_ID;
    }

    public function getDSRESPONSE(): ?int
    {
        return $this->DS_RESPONSE;
    }

    public function getDSERRORID(): ?int
    {
        return $this->DS_ERROR_ID;
    }
}