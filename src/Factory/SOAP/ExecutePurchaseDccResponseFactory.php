<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\ExecutePurchaseDccResponse;

class ExecutePurchaseDccResponseFactory
{
    public static function build(array $responseAddUser): ExecutePurchaseDccResponse
    {
        return new ExecutePurchaseDccResponse(
            $responseAddUser['DS_MERCHANT_AMOUNT'],
            $responseAddUser['DS_MERCHANT_ORDER'],
            $responseAddUser['DS_MERCHANT_DCC_SESSION'],
            $responseAddUser['DS_MERCHANT_DCC_CURRENCY'],
            $responseAddUser['DS_MERCHANT_DCC_CURRENCYISO3'],
            $responseAddUser['DS_MERCHANT_DCC_CURRENCYNAME'],
            $responseAddUser['DS_MERCHANT_DCC_EXCHANGE'],
            $responseAddUser['DS_MERCHANT_DCC_AMOUNT'],
            $responseAddUser['DS_MERCHANT_DCC_MARKUP'],
            $responseAddUser['DS_MERCHANT_DCC_CARDCOUNTRY'],
            $responseAddUser['DS_RESPONSE'],
            $responseAddUser['DS_ERROR_ID'],
        );
    }
}