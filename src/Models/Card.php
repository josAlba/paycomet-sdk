<?php

namespace Paycomet\Sdk\Models;

class Card
{
    private string $pan;
    private string $expirate;
    private string $cvv;

    public function __construct(string $pan, string $expirate, string $cvv)
    {
        $this->pan = preg_replace('/\s+/', '', $pan);
        $this->expirate = preg_replace('/\s+/', '', $expirate);
        $this->cvv = preg_replace('/\s+/', '', $cvv);
    }

    public function getPan(): string
    {
        return $this->pan;
    }

    public function getExpirate(): string
    {
        return $this->expirate;
    }

    public function getCvv(): string
    {
        return $this->cvv;
    }
}