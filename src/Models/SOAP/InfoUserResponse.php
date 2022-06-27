<?php

namespace Paycomet\Sdk\Models\SOAP;

class InfoUserResponse
{
    private ?string $DS_MERCHANT_PAN;
    private ?int $DS_ERROR_ID;
    private ?string $DS_CARD_BRAND;
    private ?string $DS_CARD_TYPE;
    private ?string $DS_CARD_I_COUNTRY_ISO3;
    private ?string $DS_EXPIRYDATE;
    private ?string $DS_CARD_HASH;
    private ?string $DS_CARD_CATEGORY;
    private ?int $DS_SEPA_CARD;
    private ?int $DS_PSD2_CARD;
    private ?string $DS_TOKEN_COF;
    private ?string $DS_EEA_CARD;

    public function __construct(
        ?string $DS_MERCHANT_PAN,
        ?int $DS_ERROR_ID,
        ?string $DS_CARD_BRAND,
        ?string $DS_CARD_TYPE,
        ?string $DS_CARD_I_COUNTRY_ISO3,
        ?string $DS_EXPIRYDATE,
        ?string $DS_CARD_HASH,
        ?string $DS_CARD_CATEGORY,
        ?int $DS_SEPA_CARD,
        ?int $DS_PSD2_CARD,
        ?string $DS_TOKEN_COF,
        ?string $DS_EEA_CARD
    ) {
        $this->DS_MERCHANT_PAN = $DS_MERCHANT_PAN;
        $this->DS_ERROR_ID = $DS_ERROR_ID;
        $this->DS_CARD_BRAND = $DS_CARD_BRAND;
        $this->DS_CARD_TYPE = $DS_CARD_TYPE;
        $this->DS_CARD_I_COUNTRY_ISO3 = $DS_CARD_I_COUNTRY_ISO3;
        $this->DS_EXPIRYDATE = $DS_EXPIRYDATE;
        $this->DS_CARD_HASH = $DS_CARD_HASH;
        $this->DS_CARD_CATEGORY = $DS_CARD_CATEGORY;
        $this->DS_SEPA_CARD = $DS_SEPA_CARD;
        $this->DS_PSD2_CARD = $DS_PSD2_CARD;
        $this->DS_TOKEN_COF = $DS_TOKEN_COF;
        $this->DS_EEA_CARD = $DS_EEA_CARD;
    }

    public function getDSMERCHANTPAN(): ?string
    {
        return $this->DS_MERCHANT_PAN;
    }

    public function getDSERRORID(): ?int
    {
        return $this->DS_ERROR_ID;
    }

    public function getDSCARDBRAND(): ?string
    {
        return $this->DS_CARD_BRAND;
    }

    public function getDSCARDTYPE(): ?string
    {
        return $this->DS_CARD_TYPE;
    }

    public function getDSCARDICOUNTRYISO3(): ?string
    {
        return $this->DS_CARD_I_COUNTRY_ISO3;
    }

    public function getDSEXPIRYDATE(): ?string
    {
        return $this->DS_EXPIRYDATE;
    }

    public function getDSCARDHASH(): ?string
    {
        return $this->DS_CARD_HASH;
    }

    public function getDSCARDCATEGORY(): ?string
    {
        return $this->DS_CARD_CATEGORY;
    }

    public function getDSSEPACARD(): ?int
    {
        return $this->DS_SEPA_CARD;
    }

    public function getDSPSD2CARD(): ?int
    {
        return $this->DS_PSD2_CARD;
    }

    public function getDSTOKENCOF(): ?string
    {
        return $this->DS_TOKEN_COF;
    }

    public function getDSEEACARD(): ?string
    {
        return $this->DS_EEA_CARD;
    }
}