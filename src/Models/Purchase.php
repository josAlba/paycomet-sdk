<?php

namespace Paycomet\Sdk\Models;

class Purchase
{
    private User $user;
    private int $amount;
    private string $transferenceIdentifier;
    private string $currency;
    private ?string $productDescription;
    private ?string $owner;
    private ?string $scoring;
    private ?string $merchantData;
    private ?string $merchantDescription;
    private ?string $scaException;
    private ?string $trxType;
    private ?string $scrowTargets;
    private ?string $userInteraction;

    /**
     * @param User $user
     * @param int $amount Importe del pago 1€ = 100
     * @param string $transreferenceIdentifier Identificador único del pago
     * @param string $currency Identificador de la moneda de la operación
     * @param string|null $productDescription Descripción del producto
     * @param string|null $owner Titular de la tarjeta
     * @param string|null $scoring (optional) Valor de scoring de riesgo de la transacción
     * @param string|null $merchantData (optional) Datos del Comercio
     * @param string|null $merchantDescription (optional) Descriptor del Comercio
     * @param string|null $scaException (optional) Opcional TIPO DE EXCEPCIÓN AL PAGO SEGURO.
     * @param string|null $trxType (condicional) Obligatorio sólo si se ha elegido una excepción MIT en el campo MERCHANT_SCA_EXCEPTION.
     * @param string|null $scrowTargets (optional) Identificación de los destinatarios de ingresos en operaciones ESCROW
     * @param string|null $userInteraction (optional) Indicador de si es posible la interacción con el usuario por parte del comercio
     */
    public function __construct(
        User $user,
        int $amount,
        string $transreferenceIdentifier,
        string $currency,
        ?string $productDescription,
        ?string $owner,
        ?string $scoring,
        ?string $merchantData,
        ?string $merchantDescription,
        ?string $scaException,
        ?string $trxType,
        ?string $scrowTargets,
        ?string $userInteraction
    ) {
        $this->user = $user;
        $this->amount = $amount;
        $this->transferenceIdentifier = $transreferenceIdentifier;
        $this->currency = $currency;
        $this->productDescription = $productDescription;
        $this->owner = $owner;
        $this->scoring = $scoring;
        $this->merchantData = $merchantData;
        $this->merchantDescription = $merchantDescription;
        $this->scaException = $scaException;
        $this->trxType = $trxType;
        $this->scrowTargets = $scrowTargets;
        $this->userInteraction = $userInteraction;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getTransferenceIdentifier(): string
    {
        return $this->transferenceIdentifier;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function getScoring(): ?string
    {
        return $this->scoring;
    }

    public function getMerchantData(): ?string
    {
        return $this->merchantData;
    }

    public function getMerchantDescription(): ?string
    {
        return $this->merchantDescription;
    }

    public function getScaException(): ?string
    {
        return $this->scaException;
    }

    public function getTrxType(): ?string
    {
        return $this->trxType;
    }

    public function getScrowTargets(): ?string
    {
        return $this->scrowTargets;
    }

    public function getUserInteraction(): ?string
    {
        return $this->userInteraction;
    }
}