<?php

namespace Paycomet\Sdk;

use Dotenv\Dotenv;
use Paycomet\Sdk\Models\SOAP\SoapInterface;
use SoapClient;

abstract class AbstractPaycometSoap extends AbstractPaycomet
{
    protected function getSoapClient(): SoapInterface
    {
        /** @var SoapInterface $clientSOAP */
        $clientSOAP = new SoapClient(Endpoints::ENDPOINT_SOAP);

        return $clientSOAP;
    }
}