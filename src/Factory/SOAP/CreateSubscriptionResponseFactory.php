<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\CreateSubscriptionResponse;

class CreateSubscriptionResponseFactory
{
    public static function build(array $responseAddUser): CreateSubscriptionResponse
    {
        return new CreateSubscriptionResponse(
            $responseAddUser['DS_IDUSER'],
            $responseAddUser['DS_TOKEN_USER'],
            $responseAddUser['DS_SUBSCRIPTION_AMOUNT'],
            $responseAddUser['DS_SUBSCRIPTION_ORDER'],
            $responseAddUser['DS_SUBSCRIPTION_CURRENCY'],
            $responseAddUser['DS_MERCHANT_AUTHCODE'],
            $responseAddUser['DS_MERCHANT_CARDCOUNTRY'],
            $responseAddUser['DS_ERROR_ID'],
            $responseAddUser['DS_CHALLENGE_URL'],
        );
    }
}