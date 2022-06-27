<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\PreauthorizationConfirmResponse;

class PreauthorizationConfirmResponseFactory
{
    public static function build(array $responseAddUser): PreauthorizationConfirmResponse
    {
        return new PreauthorizationConfirmResponse(
            $responseAddUser['DS_MERCHANT_AMOUNT'],
            $responseAddUser['DS_MERCHANT_ORDER'],
            $responseAddUser['DS_MERCHANT_CURRENCY'],
            $responseAddUser['DS_MERCHANT_AUTHCODE'],
            $responseAddUser['DS_MERCHANT_CARDCOUNTRY'],
            $responseAddUser['DS_RESPONSE'],
            $responseAddUser['DS_ERROR_ID']
        );
    }
}