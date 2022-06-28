<?php

namespace Paycomet\Sdk\Models;

class Subscription
{
    private Card $card;
    private string $startDate;
    private string $endDate;
    private string $transferenceIdentifier;
    private string $periodicity;
    private string $amount;
    private string $currency;
    private ?string $ownerName;
    private ?int $scoring;
    private ?string $merchantData;
    private ?string $scaException;
    private ?string $trxType;
    private ?string $scrowTargets;
    private ?int $userInteraction;

    /**
     * @param Card $card
     * @param string $startDate Fecha de inicio de la suscripción yyyy-mm-dd
     * @param string $endDate Fecha de fin de la suscripción yyyy-mm-dd
     * @param string $transferenceIdentifier Identificador único del pago
     * @param string $periodicity Periodicidad de la suscripción. Expresado en días.
     * @param string $amount Importe del pago 1€ = 100
     * @param string $currency Identificador de la moneda de la operación
     * @param string|null $ownerName (optional) Titular de la tarjeta
     * @param int|null $scoring (optional) Valor de scoring de riesgo de la transacción
     * @param string|null $merchantData (optional) Datos del Comercio
     * @param string|null $scaException (optional) Opcional TIPO DE EXCEPCIÓN AL PAGO SEGURO.
     * @param string|null $trxType (condicional) Obligatorio solo si se ha elegido una excepción MIT en el campo MERCHANT_SCA_EXCEPTION.
     * @param string|null $scrowTargets (optional) Identificación de los destinatarios de ingresos en operaciones ESCROW
     * @param int|null $userInteraction (optional) Indicador de si es posible la interacción con el usuario por parte del comercio
     */
    public function __construct(
        Card $card,
        string $startDate,
        string $endDate,
        string $transferenceIdentifier,
        string $periodicity,
        string $amount,
        string $currency,
        ?string $ownerName,
        ?int $scoring,
        ?string $merchantData,
        ?string $scaException,
        ?string $trxType,
        ?string $scrowTargets,
        ?int $userInteraction
    ) {
        $this->card = $card;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->transferenceIdentifier = $transferenceIdentifier;
        $this->periodicity = $periodicity;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->ownerName = $ownerName;
        $this->scoring = $scoring;
        $this->merchantData = $merchantData;
        $this->scaException = $scaException;
        $this->trxType = $trxType;
        $this->scrowTargets = $scrowTargets;
        $this->userInteraction = $userInteraction;
    }

    public function getCard(): Card
    {
        return $this->card;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function getEndDate(): string
    {
        return $this->endDate;
    }

    public function getTransferenceIdentifier(): string
    {
        return $this->transferenceIdentifier;
    }

    public function getPeriodicity(): string
    {
        return $this->periodicity;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    public function getScoring(): ?int
    {
        return $this->scoring;
    }

    public function getMerchantData(): ?string
    {
        return $this->merchantData;
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

    public function getUserInteraction(): ?int
    {
        return $this->userInteraction;
    }
}