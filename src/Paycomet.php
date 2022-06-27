<?php

namespace Paycomet\Sdk;

use Paycomet\Sdk\Models\PaycometConfiguration;
use Paycomet\Sdk\Models\SOAP\SoapInterface;
use SoapClient;

abstract class Paycomet
{
    protected const SHA_512 = 'sha512';

    protected string $merchantCode;
    protected string $terminal;
    protected string $password;
    protected string $ip;
    protected ?string $jetid;

    public function __construct(PaycometConfiguration $paycometConfiguration)
    {
        $this->merchantCode = $paycometConfiguration->getMerchantCode();
        $this->terminal = $paycometConfiguration->getTerminal();
        $this->password = $paycometConfiguration->getPassword();
        $this->ip = $paycometConfiguration->getIp();
        $this->jetid = $paycometConfiguration->getJetId();
    }
}