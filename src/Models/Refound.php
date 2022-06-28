<?php

namespace Paycomet\Sdk\Models;

class Refound
{
    private User $user;
    private string $transferenceIdentifier;
    private string $currency;
    private string $authCode;
    private ?string $amount;
    private ?string $merchant_description;

    /**
     * @param User $user
     * @param string $transferenceIdentifier Identificador único del pago
     * @param string $currency Identificador de la moneda de la operación
     * @param string $authCode AuthCode de la operación original a devolver
     * @param string|null $amount (optional) Importe del pago 1€ = 100
     * @param string|null $merchant_description (optional) Descriptor del Comercio
     */
    public function __construct(
        User $user,
        string $transferenceIdentifier,
        string $currency,
        string $authCode,
        ?string $amount,
        ?string $merchant_description
    ) {
        $this->user = $user;
        $this->transferenceIdentifier = $transferenceIdentifier;
        $this->currency = $currency;
        $this->authCode = $authCode;
        $this->amount = $amount;
        $this->merchant_description = $merchant_description;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getTransferenceIdentifier(): string
    {
        return $this->transferenceIdentifier;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAuthCode(): string
    {
        return $this->authCode;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getMerchantDescription(): ?string
    {
        return $this->merchant_description;
    }
}