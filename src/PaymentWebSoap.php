<?php

namespace Paycomet\Sdk;

use Paycomet\Sdk\Factory\SOAP\ConfirmPurchaseDccResponseFactory;
use Paycomet\Sdk\Factory\SOAP\CreatePreauthorizationRequestFactory;
use Paycomet\Sdk\Factory\SOAP\ExecutePurchaseDccResponseFactory;
use Paycomet\Sdk\Factory\SOAP\ExecutePurchaseResponseFactory;
use Paycomet\Sdk\Factory\SOAP\PreauthorizationCancelResponseFactory;
use Paycomet\Sdk\Factory\SOAP\PreauthorizationConfirmResponseFactory;
use Paycomet\Sdk\Factory\SOAP\RefundResponseFactory;
use Paycomet\Sdk\Models\Purchase;
use Paycomet\Sdk\Models\Refound;
use Paycomet\Sdk\Models\SOAP\ConfirmPurchaseDccResponse;
use Paycomet\Sdk\Models\SOAP\CreatePreauthorizationRequest;
use Paycomet\Sdk\Models\SOAP\ExecutePurchaseDccResponse;
use Paycomet\Sdk\Models\SOAP\ExecutePurchaseResponse;
use Paycomet\Sdk\Models\SOAP\PreauthorizationCancelResponse;
use Paycomet\Sdk\Models\SOAP\PreauthorizationConfirmResponse;
use Paycomet\Sdk\Models\SOAP\RefundResponse;
use Paycomet\Sdk\Models\SOAP\SoapInterface;
use Paycomet\Sdk\Models\User;
use SoapClient;

class PaymentWebSoap extends Paycomet
{
    protected function getSoapClient(): SoapInterface
    {
        /** @var SoapInterface $clientSOAP */
        $clientSOAP = new SoapClient(Endpoints::ENDPOINT_SOAP);

        return $clientSOAP;
    }

    /**
     * Ejecuta un pago por web service.
     *
     * @param Purchase $purchase
     *
     * @return ExecutePurchaseResponse
     */
    public function purchase(Purchase $purchase): ExecutePurchaseResponse
    {
        $signature = $this->getSignaturePurchase($purchase);

        $executePurchaseResponse = $this->getSoapClient()->execute_purchase(
            $this->merchantCode,
            $this->terminal,
            $purchase->getUser()->getUserId(),
            $purchase->getUser()->getToken(),
            $purchase->getAmount(),
            $purchase->getTransferenceIdentifier(),
            $purchase->getCurrency(),
            $signature,
            $this->ip,
            $purchase->getProductDescription(),
            $purchase->getOwner(),
            $purchase->getScoring(),
            $purchase->getMerchantData(),
            $purchase->getMerchantDescription(),
            $purchase->getScaException(),
            $purchase->getTrxType(),
            $purchase->getScrowTargets(),
            $purchase->getUserInteraction()
        );

        return ExecutePurchaseResponseFactory::build($executePurchaseResponse);
    }

    /**
     * Ejecuta un pago por web service con la operativa DCC.
     *
     * @param Purchase $purchase
     *
     * @return ExecutePurchaseDccResponse
     */
    public function purchaseDcc(Purchase $purchase): ExecutePurchaseDccResponse
    {
        $signature = $this->getSignaturePurchase($purchase);

        $executePurchaseDccResponse = $this->getSoapClient()->execute_purchase_dcc(
            $this->merchantCode,
            $this->terminal,
            $purchase->getUser()->getUserId(),
            $purchase->getUser()->getToken(),
            $purchase->getAmount(),
            $purchase->getTransferenceIdentifier(),
            $signature,
            $this->ip,
            $purchase->getProductDescription(),
            $purchase->getOwner(),
            $purchase->getMerchantDescription()
        );

        return ExecutePurchaseDccResponseFactory::build($executePurchaseDccResponse);
    }

    /**
     * Confirma un pago por web service con la operativa DCC
     *
     * @param string $transferenceIdentifier Identificador único del pago
     * @param string $dccCurrency Moneda de la transacción elegida. Puede ser la del producto PAYCOMET o la nativa seleccionada por el usuario final. El importe será el enviado en execute_purchase_dcc si es el mismo del producto y el convertido en caso de ser diferente.
     * @param string $dccSession Misma sesión enviada en el proceso de execute_purchase_dcc.
     *
     * @return ConfirmPurchaseDccResponse
     */
    public function confirmPurchaseDcc(
        string $transferenceIdentifier,
        string $dccCurrency,
        string $dccSession
    ): ConfirmPurchaseDccResponse {
        $signature = $this->getSignatureConfirmPurchaseDcc($transferenceIdentifier, $dccCurrency, $dccSession);

        $confirmPurchaseDccResponse = $this->getSoapClient()->confirm_purchase_dcc(
            $this->merchantCode,
            $this->terminal,
            $transferenceIdentifier,
            $dccCurrency,
            $dccSession,
            $signature
        );

        return ConfirmPurchaseDccResponseFactory::build($confirmPurchaseDccResponse);
    }

    /**
     * Ejecuta una devolución de un pago por web service
     *
     * @param Refound $refund
     *
     * @return RefundResponse
     */
    public function refund(Refound $refund): RefundResponse
    {
        $signature = $this->getSignatureRefund($refund);

        $refundResponse = $this->getSoapClient()->execute_refund(
            $this->merchantCode,
            $this->terminal,
            $refund->getUser()->getUserId(),
            $refund->getUser()->getToken(),
            $refund->getAuthcode(),
            $refund->getTransreferenceIdentifier(),
            $refund->getCurrency(),
            $signature,
            $this->ip,
            $refund->getAmount(),
            $refund->getMerchantDescription()
        );

        return RefundResponseFactory::build($refundResponse);
    }

    /**
     * Crea una preautorización por web service
     *
     * @param Purchase $purchase
     *
     * @return CreatePreauthorizationRequest
     */
    public function createPreauthorization(Purchase $purchase): CreatePreauthorizationRequest
    {
        $signature = $this->getSignaturePurchase($purchase);

        $executePurchase = $this->getSoapClient()->create_preauthorization(
            $this->merchantCode,
            $this->terminal,
            $purchase->getUser()->getUserId(),
            $purchase->getUser()->getToken(),
            $purchase->getAmount(),
            $purchase->getTransferenceIdentifier(),
            $purchase->getCurrency(),
            $signature,
            $this->ip,
            $purchase->getProductDescription(),
            $purchase->getOwner(),
            $purchase->getScoring(),
            $purchase->getMerchantData(),
            $purchase->getMerchantDescription(),
            $purchase->getScaException(),
            $purchase->getTrxType(),
            $purchase->getScrowTargets(),
            $purchase->getUserInteraction()
        );

        return CreatePreauthorizationRequestFactory::build($executePurchase);
    }

    /**
     * Confirma una preautorización por web service previamente enviada
     *
     * @param User $user
     * @param string $amount
     * @param string $transferenceIdentifier
     * @param string|null $merchantDescription
     *
     * @return PreauthorizationConfirmResponse
     */
    public function preauthorizationConfirm(
        User $user,
        string $amount,
        string $transferenceIdentifier,
        ?string $merchantDescription = null
    ): PreauthorizationConfirmResponse {
        $signature = $this->getSignaturePreAuthorizationConfirm($user, $amount, $transferenceIdentifier);

        $preAuthorizationConfirmResponse = $this->getSoapClient()->preauthorization_confirm(
            $this->merchantCode,
            $this->terminal,
            $user->getUserId(),
            $user->getToken(),
            $amount,
            $transferenceIdentifier,
            $signature,
            $this->ip,
            $merchantDescription
        );

        return PreauthorizationConfirmResponseFactory::build($preAuthorizationConfirmResponse);
    }

    /**
     * Cancela una preautorización por web service previamente enviada
     *
     * @param User $user
     * @param string $amount
     * @param string $transferenceIdentifier
     *
     * @return PreauthorizationCancelResponse
     */
    public function preauthorizationCancel(
        User $user,
        string $amount,
        string $transferenceIdentifier
    ): PreauthorizationCancelResponse {
        $signature = $this->getSignaturePreAuthorizationConfirm($user, $amount, $transferenceIdentifier);

        $preAuthorizationCancelResponse = $this->getSoapClient()->preauthorization_cancel(
            $this->merchantCode,
            $this->terminal,
            $user->getUserId(),
            $user->getToken(),
            $amount,
            $transferenceIdentifier,
            $signature,
            $this->ip
        );

        return PreauthorizationCancelResponseFactory::build($preAuthorizationCancelResponse);
    }

    private function getSignaturePreAuthorizationConfirm(
        User $user,
        string $amount,
        string $transferenceIdentifier
    ): string {
        $signature = $this->merchantCode.
            $user->getUserId().
            $user->getToken().
            $this->terminal.
            $transferenceIdentifier.
            $amount.
            $this->password;

        return hash(self::SHA_512, $signature);
    }

    private function getSignatureRefund(Refound $refund): string
    {
        $signature = $this->merchantCode.
            $refund->getUser()->getUserId().
            $refund->getUser()->getToken().
            $this->terminal.
            $refund->getAuthcode().
            $refund->getTransreferenceIdentifier().
            $this->password;

        return hash(self::SHA_512, $signature);
    }

    private function getSignatureConfirmPurchaseDcc(
        string $transferenceIdentifier,
        string $dccCurrency,
        string $dccSession
    ): string {
        $signature = $this->merchantCode.
            $this->terminal.
            $transferenceIdentifier.
            $dccCurrency.
            $dccSession.
            $this->password;

        return hash(self::SHA_512, $signature);
    }

    private function getSignaturePurchase(Purchase $purchase): string
    {
        $signature = $this->merchantCode.
            $purchase->getUser()->getUserId().
            $purchase->getUser()->getToken().
            $this->terminal.
            $purchase->getAmount().
            $purchase->getTransferenceIdentifier().
            $this->password;

        return hash(self::SHA_512, $signature);
    }
}