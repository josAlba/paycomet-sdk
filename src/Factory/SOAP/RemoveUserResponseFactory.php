<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\RemoveUserResponse;

class RemoveUserResponseFactory
{
    public static function build(array $responseInfoUser): RemoveUserResponse
    {
        return new RemoveUserResponse(
            $responseInfoUser['DS_RESPONSE'],
            $responseInfoUser['DS_ERROR_ID'],
        );
    }
}