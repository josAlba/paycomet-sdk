<?php

namespace Paycomet\Sdk\Models\SOAP;

class RefundResponse
{
    private ?string $DS_MERCHANT_ORDER;
    private ?string $DS_MERCHANT_CURRENCY;
    private ?string $DS_MERCHANT_AUTHCODE;
    private ?int $DS_RESPONSE;
    private ?int $DS_ERROR_ID;

    public function __construct(
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_CURRENCY,
        ?string $DS_MERCHANT_AUTHCODE,
        ?int $DS_RESPONSE,
        ?int $DS_ERROR_ID
    ) {
        $this->DS_MERCHANT_ORDER = $DS_MERCHANT_ORDER;
        $this->DS_MERCHANT_CURRENCY = $DS_MERCHANT_CURRENCY;
        $this->DS_MERCHANT_AUTHCODE = $DS_MERCHANT_AUTHCODE;
        $this->DS_RESPONSE = $DS_RESPONSE;
        $this->DS_ERROR_ID = $DS_ERROR_ID;
    }

    public function getDSMERCHANTORDER(): ?string
    {
        return $this->DS_MERCHANT_ORDER;
    }

    public function getDSMERCHANTCURRENCY(): ?string
    {
        return $this->DS_MERCHANT_CURRENCY;
    }

    public function getDSMERCHANTAUTHCODE(): ?string
    {
        return $this->DS_MERCHANT_AUTHCODE;
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