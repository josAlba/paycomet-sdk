<?php

namespace Paycomet\Sdk\Models\SOAP;

class CreateSubscriptionResponse
{
    private ?int $DS_IDUSER;
    private ?string $DS_TOKEN_USER;
    private ?string $DS_SUBSCRIPTION_AMOUNT;
    private ?string $DS_SUBSCRIPTION_ORDER;
    private ?string $DS_SUBSCRIPTION_CURRENCY;
    private ?string $DS_MERCHANT_AUTHCODE;
    private ?int $DS_MERCHANT_CARDCOUNTRY;
    private ?int $DS_ERROR_ID;
    private ?string $DS_CHALLENGE_URL;

    public function __construct(
        ?int $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_SUBSCRIPTION_AMOUNT,
        ?string $DS_SUBSCRIPTION_ORDER,
        ?string $DS_SUBSCRIPTION_CURRENCY,
        ?string $DS_MERCHANT_AUTHCODE,
        ?int $DS_MERCHANT_CARDCOUNTRY,
        ?int $DS_ERROR_ID,
        ?string $DS_CHALLENGE_URL
    ) {
        $this->DS_IDUSER = $DS_IDUSER;
        $this->DS_TOKEN_USER = $DS_TOKEN_USER;
        $this->DS_SUBSCRIPTION_AMOUNT = $DS_SUBSCRIPTION_AMOUNT;
        $this->DS_SUBSCRIPTION_ORDER = $DS_SUBSCRIPTION_ORDER;
        $this->DS_SUBSCRIPTION_CURRENCY = $DS_SUBSCRIPTION_CURRENCY;
        $this->DS_MERCHANT_AUTHCODE = $DS_MERCHANT_AUTHCODE;
        $this->DS_MERCHANT_CARDCOUNTRY = $DS_MERCHANT_CARDCOUNTRY;
        $this->DS_ERROR_ID = $DS_ERROR_ID;
        $this->DS_CHALLENGE_URL = $DS_CHALLENGE_URL;
    }

    public function getDSIDUSER(): ?int
    {
        return $this->DS_IDUSER;
    }

    public function getDSTOKENUSER(): ?string
    {
        return $this->DS_TOKEN_USER;
    }

    public function getDSSUBSCRIPTIONAMOUNT(): ?string
    {
        return $this->DS_SUBSCRIPTION_AMOUNT;
    }

    public function getDSSUBSCRIPTIONORDER(): ?string
    {
        return $this->DS_SUBSCRIPTION_ORDER;
    }

    public function getDSSUBSCRIPTIONCURRENCY(): ?string
    {
        return $this->DS_SUBSCRIPTION_CURRENCY;
    }

    public function getDSMERCHANTAUTHCODE(): ?string
    {
        return $this->DS_MERCHANT_AUTHCODE;
    }

    public function getDSMERCHANTCARDCOUNTRY(): ?int
    {
        return $this->DS_MERCHANT_CARDCOUNTRY;
    }

    public function getDSERRORID(): ?int
    {
        return $this->DS_ERROR_ID;
    }

    public function getDSCHALLENGEURL(): ?string
    {
        return $this->DS_CHALLENGE_URL;
    }
}