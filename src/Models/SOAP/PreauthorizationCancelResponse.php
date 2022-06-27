<?php

namespace Paycomet\Sdk\Models\SOAP;

class PreauthorizationCancelResponse
{
    private ?int $DS_MERCHANT_AMOUNT;
    private ?string $DS_MERCHANT_ORDER;
    private ?string $DS_MERCHANT_CURRENCY;
    private ?string $DS_MERCHANT_AUTHCODE;
    private ?int $DS_MERCHANT_CARDCOUNTRY;
    private ?int $DS_RESPONSE;
    private ?int $DS_ERROR_ID;

    public function __construct(
        ?int $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_CURRENCY,
        ?string $DS_MERCHANT_AUTHCODE,
        ?int $DS_MERCHANT_CARDCOUNTRY,
        ?int $DS_RESPONSE,
        ?int $DS_ERROR_ID
    ) {
        $this->DS_MERCHANT_AMOUNT = $DS_MERCHANT_AMOUNT;
        $this->DS_MERCHANT_ORDER = $DS_MERCHANT_ORDER;
        $this->DS_MERCHANT_CURRENCY = $DS_MERCHANT_CURRENCY;
        $this->DS_MERCHANT_AUTHCODE = $DS_MERCHANT_AUTHCODE;
        $this->DS_MERCHANT_CARDCOUNTRY = $DS_MERCHANT_CARDCOUNTRY;
        $this->DS_RESPONSE = $DS_RESPONSE;
        $this->DS_ERROR_ID = $DS_ERROR_ID;
    }

    public function getDSMERCHANTAMOUNT(): ?int
    {
        return $this->DS_MERCHANT_AMOUNT;
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

    public function getDSMERCHANTCARDCOUNTRY(): ?int
    {
        return $this->DS_MERCHANT_CARDCOUNTRY;
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