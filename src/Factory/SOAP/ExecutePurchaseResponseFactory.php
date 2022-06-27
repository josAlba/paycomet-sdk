<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\ExecutePurchaseResponse;

class ExecutePurchaseResponseFactory
{
    public static function build(array $responseAddUser): ExecutePurchaseResponse
    {
        return new ExecutePurchaseResponse(
            $responseAddUser['DS_MERCHANT_AMOUNT'],
            $responseAddUser['DS_MERCHANT_ORDER'],
            $responseAddUser['DS_MERCHANT_CURRENCY'],
            $responseAddUser['DS_MERCHANT_AUTHCODE'],
            $responseAddUser['DS_MERCHANT_CARDCOUNTRY'],
            $responseAddUser['DS_RESPONSE'],
            $responseAddUser['DS_ERROR_ID'],
            $responseAddUser['DS_CHALLENGE_URL'],
        );
    }
}