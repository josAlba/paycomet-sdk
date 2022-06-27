<?php

namespace Paycomet\Sdk\Models\SOAP;

class ExecutePurchaseDccResponse
{
    private ?int $DS_MERCHANT_AMOUNT;
    private ?string $DS_MERCHANT_ORDER;
    private ?string $DS_MERCHANT_DCC_SESSION;
    private ?string $DS_MERCHANT_DCC_CURRENCY;
    private ?string $DS_MERCHANT_DCC_CURRENCYISO3;
    private ?string $DS_MERCHANT_DCC_CURRENCYNAME;
    private ?string $DS_MERCHANT_DCC_EXCHANGE;
    private ?string $DS_MERCHANT_DCC_AMOUNT;
    private ?string $DS_MERCHANT_DCC_MARKUP;
    private ?string $DS_MERCHANT_DCC_CARDCOUNTRY;
    private ?int $DS_RESPONSE;
    private ?int $DS_ERROR_ID;

    public function __construct(
        ?int $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_DCC_SESSION,
        ?string $DS_MERCHANT_DCC_CURRENCY,
        ?string $DS_MERCHANT_DCC_CURRENCYISO3,
        ?string $DS_MERCHANT_DCC_CURRENCYNAME,
        ?string $DS_MERCHANT_DCC_EXCHANGE,
        ?string $DS_MERCHANT_DCC_AMOUNT,
        ?string $DS_MERCHANT_DCC_MARKUP,
        ?string $DS_MERCHANT_DCC_CARDCOUNTRY,
        ?int $DS_RESPONSE,
        ?int $DS_ERROR_ID
    ) {
        $this->DS_MERCHANT_AMOUNT = $DS_MERCHANT_AMOUNT;
        $this->DS_MERCHANT_ORDER = $DS_MERCHANT_ORDER;
        $this->DS_MERCHANT_DCC_SESSION = $DS_MERCHANT_DCC_SESSION;
        $this->DS_MERCHANT_DCC_CURRENCY = $DS_MERCHANT_DCC_CURRENCY;
        $this->DS_MERCHANT_DCC_CURRENCYISO3 = $DS_MERCHANT_DCC_CURRENCYISO3;
        $this->DS_MERCHANT_DCC_CURRENCYNAME = $DS_MERCHANT_DCC_CURRENCYNAME;
        $this->DS_MERCHANT_DCC_EXCHANGE = $DS_MERCHANT_DCC_EXCHANGE;
        $this->DS_MERCHANT_DCC_AMOUNT = $DS_MERCHANT_DCC_AMOUNT;
        $this->DS_MERCHANT_DCC_MARKUP = $DS_MERCHANT_DCC_MARKUP;
        $this->DS_MERCHANT_DCC_CARDCOUNTRY = $DS_MERCHANT_DCC_CARDCOUNTRY;
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

    public function getDSMERCHANTDCCSESSION(): ?string
    {
        return $this->DS_MERCHANT_DCC_SESSION;
    }

    public function getDSMERCHANTDCCCURRENCY(): ?string
    {
        return $this->DS_MERCHANT_DCC_CURRENCY;
    }

    public function getDSMERCHANTDCCCURRENCYISO3(): ?string
    {
        return $this->DS_MERCHANT_DCC_CURRENCYISO3;
    }

    public function getDSMERCHANTDCCCURRENCYNAME(): ?string
    {
        return $this->DS_MERCHANT_DCC_CURRENCYNAME;
    }

    public function getDSMERCHANTDCCEXCHANGE(): ?string
    {
        return $this->DS_MERCHANT_DCC_EXCHANGE;
    }

    public function getDSMERCHANTDCCAMOUNT(): ?string
    {
        return $this->DS_MERCHANT_DCC_AMOUNT;
    }

    public function getDSMERCHANTDCCMARKUP(): ?string
    {
        return $this->DS_MERCHANT_DCC_MARKUP;
    }

    public function getDSMERCHANTDCCCARDCOUNTRY(): ?string
    {
        return $this->DS_MERCHANT_DCC_CARDCOUNTRY;
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