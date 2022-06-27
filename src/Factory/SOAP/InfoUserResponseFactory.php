<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\InfoUserResponse;

class InfoUserResponseFactory
{
    public static function build(array $responseInfoUser): InfoUserResponse
    {
        return new InfoUserResponse(
            $responseInfoUser['DS_MERCHANT_PAN'],
            $responseInfoUser['DS_ERROR_ID'],
            $responseInfoUser['DS_CARD_BRAND'],
            $responseInfoUser['DS_CARD_TYPE'],
            $responseInfoUser['DS_CARD_I_COUNTRY_ISO3'],
            $responseInfoUser['DS_EXPIRYDATE'],
            $responseInfoUser['DS_CARD_HASH'],
            $responseInfoUser['DS_CARD_CATEGORY'],
            $responseInfoUser['DS_SEPA_CARD'],
            $responseInfoUser['DS_PSD2_CARD'],
            $responseInfoUser['DS_TOKEN_COF'],
            $responseInfoUser['DS_EEA_CARD']
        );
    }
}