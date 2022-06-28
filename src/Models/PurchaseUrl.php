<?php

namespace Paycomet\Sdk\Models;

class PurchaseUrl
{
    private string $transferenceIdentifier;
    private int $amount;
    private string $currency;
    private string $language;
    private ?string $description;
    private ?string $secure3;
    private ?int $scoring;
    private ?string $urlOk;
    private ?string $urlKo;
    private ?string $merchantData;
    private ?string $merchantDescription;
    private ?string $scaException;
    private ?string $trxType;
    private ?string $scrowTargets;

    /**
     * Devuelve la URL para lanzar un execute_purchase bajo IFRAME/Fullscreen
     *
     * @param string $transferenceIdentifier Identificador único del pago
     * @param int $amount Importe del pago 1€ = 100
     * @param string $currency Identificador de la moneda de la operación
     * @param string $language (optional) Idioma de los literales de la transacción
     * @param string|null $description (optional) Descripción de la operación
     * @param string|null $secure3 (optional) Forzar la operación por 0 = No segura y 1 = Segura mediante 3DSecure
     * @param integer|null $scoring (optional) Valor de scoring de riesgo de la transacción
     * @param string|null $urlOk (optional) URL a la que redirigir en caso de éxito.
     * @param string|null $urlKo (optional) URL a la que redirigir en caso de error.
     * @param string|null $merchantData (optional) Datos del Comercio
     * @param string|null $merchantDescription (optional) Descriptor del Comercio
     * @param string|null $scaException (optional) Opcional TIPO DE EXCEPCIÓN AL PAGO SEGURO.
     * @param string|null $trxType (condicional) Obligatorio sólo si se ha elegido una excepción MIT en el campo MERCHANT_SCA_EXCEPTION.
     * @param string|null $scrowTargets (optional) Identificación de los destinatarios de ingresos en operaciones ESCROW
     */
    public function __construct(
        string $transferenceIdentifier,
        int $amount,
        string $currency,
        string $language = "ES",
        ?string $description = null,
        ?string $secure3  = null,
        ?int $scoring = null,
        ?string $urlOk = null,
        ?string $urlKo = null,
        ?string $merchantData = null,
        ?string $merchantDescription = null,
        ?string $scaException = null,
        ?string $trxType = null,
        ?string $scrowTargets = null
    ) {
        $this->transferenceIdentifier = $transferenceIdentifier;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->language = $language;
        $this->description = $description;
        $this->secure3 = $secure3;
        $this->scoring = $scoring;
        $this->urlOk = $urlOk;
        $this->urlKo = $urlKo;
        $this->merchantData = $merchantData;
        $this->merchantDescription = $merchantDescription;
        $this->scaException = $scaException;
        $this->trxType = $trxType;
        $this->scrowTargets = $scrowTargets;
    }

    public function getTransferenceIdentifier(): string
    {
        return $this->transferenceIdentifier;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getSecure3(): ?string
    {
        return $this->secure3;
    }

    public function getScoring(): ?int
    {
        return $this->scoring;
    }

    public function getUrlOk(): ?string
    {
        return $this->urlOk;
    }

    public function getUrlKo(): ?string
    {
        return $this->urlKo;
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
}