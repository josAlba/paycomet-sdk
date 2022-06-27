<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\RefundResponse;

class RefundResponseFactory
{
    public static function build(array $responseAddUser): RefundResponse
    {
        return new RefundResponse(
            $responseAddUser['DS_MERCHANT_ORDER'],
            $responseAddUser['DS_MERCHANT_CURRENCY'],
            $responseAddUser['DS_MERCHANT_AUTHCODE'],
            $responseAddUser['DS_RESPONSE'],
            $responseAddUser['DS_ERROR_ID']
        );
    }
}