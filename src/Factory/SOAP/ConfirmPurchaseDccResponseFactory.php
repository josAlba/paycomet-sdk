<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\ConfirmPurchaseDccResponse;

class ConfirmPurchaseDccResponseFactory
{
    public static function build(array $responseAddUser): ConfirmPurchaseDccResponse
    {
        return new ConfirmPurchaseDccResponse(
            $responseAddUser['DS_MERCHANT_AMOUNT'],
            $responseAddUser['DS_MERCHANT_ORDER'],
            $responseAddUser['DS_MERCHANT_CURRENCY'],
            $responseAddUser['DS_MERCHANT_AUTHCODE'],
            $responseAddUser['DS_MERCHANT_CARDCOUNTRY'],
            $responseAddUser['DS_RESPONSE'],
            $responseAddUser['DS_ERROR_ID'],
        );
    }
}