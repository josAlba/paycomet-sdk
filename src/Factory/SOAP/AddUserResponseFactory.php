<?php

namespace Paycomet\Sdk\Factory\SOAP;

use Paycomet\Sdk\Models\SOAP\AddUserResponse;

class AddUserResponseFactory
{
    public static function build(array $responseAddUser): AddUserResponse
    {
        return new AddUserResponse(
            $responseAddUser['DS_IDUSER'],
            $responseAddUser['DS_TOKEN_USER'],
            $responseAddUser['DS_ERROR_ID']
        );
    }
}