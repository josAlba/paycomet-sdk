<?php

namespace Paycomet\Sdk;

use Paycomet\Sdk\Models\PurchaseUrl;

class PaymentWebIframe extends Paycomet
{
    private const OPERATION_TYPE_DEFAULT = 1;

    /**
     * Devuelve la URL para lanzar un execute_purchase bajo IFRAME/Fullscreen
     *
     * @param PurchaseUrl $purchaseUrl
     *
     * @return string
     */
    public function purchaseUrl(PurchaseUrl $purchaseUrl): string
    {
        $signature = $this->getSignature($purchaseUrl);

        $parameters = $this->getParams($purchaseUrl, $signature);

        $this->calculateVHASH($parameters);

        $secureUrlHash = $this->getSecureUrlHash($parameters);

        return Endpoints::ENDPOINT_URL.$secureUrlHash;
    }

    /**
     * @param PurchaseUrl $purchaseUrl
     * @param string $signature
     *
     * @return string[]
     */
    private function getParams(PurchaseUrl $purchaseUrl, string $signature): array
    {
        $parameters = [];

        $parameters["MERCHANT_MERCHANTCODE"] = $this->merchantCode;
        $parameters["MERCHANT_TERMINAL"] = $this->terminal;
        $parameters["OPERATION"] = self::OPERATION_TYPE_DEFAULT;
        $parameters["LANGUAGE"] = $purchaseUrl->getLanguage();
        $parameters["MERCHANT_MERCHANTSIGNATURE"] = $signature;
        $parameters["MERCHANT_ORDER"] = $purchaseUrl->getTransferenceIdentifier();
        $parameters["MERCHANT_CURRENCY"] = $purchaseUrl->getCurrency();

        if ($purchaseUrl->getUrlOk() !== null) {
            $parameters["URLOK"] = $purchaseUrl->getUrlOk();
        }

        if ($purchaseUrl->getUrlKo() !== null) {
            $parameters["URLKO"] = $purchaseUrl->getUrlKo();
        }

        if ($purchaseUrl->getSecure3() !== null) {
            $parameters["3DSECURE"] = $purchaseUrl->getSecure3();
        }

        if ($purchaseUrl->getAmount() !== null) {
            $parameters["MERCHANT_AMOUNT"] = $purchaseUrl->getAmount();
        }

        if ($purchaseUrl->getDescription() !== null) {
            $parameters["MERCHANT_PRODUCTDESCRIPTION"] = $purchaseUrl->getDescription();
        }

        if ($purchaseUrl->getMerchantData() !== null) {
            $parameters["MERCHANT_DATA"] = $purchaseUrl->getMerchantData();
        }

        if ($purchaseUrl->getMerchantDescription() !== null) {
            $parameters["MERCHANT_MERCHANTDESCRIPTOR"] = $purchaseUrl->getMerchantDescription();
        }

        if ($purchaseUrl->getScoring() !== null) {
            $parameters["MERCHANT_SCORING"] = $purchaseUrl->getScoring();
        }
        if ($purchaseUrl->getScaException() !== null) {
            $parameters["MERCHANT_SCA_EXCEPTION"] = $purchaseUrl->getScaException();
        }
        if ($purchaseUrl->getTrxType() !== null) {
            $parameters["MERCHANT_TRX_TYPE"] = $purchaseUrl->getTrxType();
        }
        if ($purchaseUrl->getScrowTargets() !== null) {
            $parameters["ESCROW_TARGETS"] = $purchaseUrl->getScrowTargets();
        }

        return $parameters;
    }

    private function getSignature(PurchaseUrl $purchaseUrl): string
    {
        return $this->merchantCode.
            $this->terminal.
            self::OPERATION_TYPE_DEFAULT.
            $purchaseUrl->getTransferenceIdentifier().
            $purchaseUrl->getAmount().
            $purchaseUrl->getCurrency().
            md5($this->password);
    }

    /**
     * @param string[] $parameters
     *
     * @return void
     */
    private function calculateVHASH(array &$parameters): void
    {
        $content = "";

        foreach ($parameters as $key => $value) {
            $this->addSeparator($content);
            $this->addValue($key, $value, $content);
        }

        $parameters["VHASH"] = hash(self::SHA_512, md5($content.md5($this->password)));
    }

    /**
     * @param string[] $parameters
     *
     * @return void
     */
    private function getSecureUrlHash(array $parameters): string
    {
        $secureUrlHash = "";

        foreach ($parameters as $key => $value) {
            $this->addSeparator($content);
            $this->addValue($key, $value, $content);
        }

        return $secureUrlHash;
    }

    private function addSeparator(string &$content): void
    {
        if ($content === "") {
            return;
        }

        $content .= "&";
    }

    private function addValue($key, string $value, string &$content): void
    {
        $content .= urlencode($key)."=".urlencode($value);
    }
}