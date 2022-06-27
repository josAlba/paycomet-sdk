<?php

namespace Paycomet\Sdk\Models;

class Refound
{
    private User $user;
    private string $transreferenceIdentifier;
    private string $currency;
    private string $authcode;
    private ?string $amount;
    private ?string $merchant_description;

    /**
     * @param User $user
     * @param string $transferenceIdentifier Identificador único del pago
     * @param string $currency Identificador de la moneda de la operación
     * @param string $authcode AuthCode de la operación original a devolver
     * @param string|null $amount (optional) Importe del pago 1€ = 100
     * @param string|null $merchant_description (optional) Descriptor del Comercio
     */
    public function __construct(
        User $user,
        string $transferenceIdentifier,
        string $currency,
        string $authcode,
        ?string $amount,
        ?string $merchant_description
    ) {
        $this->user = $user;
        $this->transreferenceIdentifier = $transferenceIdentifier;
        $this->currency = $currency;
        $this->authcode = $authcode;
        $this->amount = $amount;
        $this->merchant_description = $merchant_description;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getTransreferenceIdentifier(): string
    {
        return $this->transreferenceIdentifier;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAuthcode(): string
    {
        return $this->authcode;
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