<?php

namespace Paycomet\Sdk;

use Paycomet\Sdk\Factory\SOAP\AddUserResponseFactory;
use Paycomet\Sdk\Models\SOAP\AddUserResponse;
use Paycomet\Sdk\Models\Subscription;

class SubscriptionsSoap extends AbstractPaycometSoap
{
    private const EXECUTE_DEFAULT = 1;

    public function createSubscription(Subscription $subscription): AddUserResponse
    {
        $signature = $this->getSignatureCreateSubscription($subscription);

        $createSubscriptionResponse = $this->getSoapClient()->create_subscription(
            $this->merchantCode,
            $this->terminal,
            $subscription->getCard()->getPan(),
            $subscription->getCard()->getExpirate(),
            $subscription->getCard()->getCvv(),
            $subscription->getStartDate(),
            $subscription->getEndDate(),
            $subscription->getTransferenceIdentifier(),
            $subscription->getPeriodicity(),
            $subscription->getAmount(),
            $subscription->getCurrency(),
            $signature,
            $this->ip,
            self::EXECUTE_DEFAULT,
            $subscription->getOwnerName(),
            $subscription->getScoring(),
            $subscription->getMerchantData(),
            $subscription->getScaException(),
            $subscription->getTrxType(),
            $subscription->getScrowTargets(),
            $subscription->getUserInteraction()
        );

        return AddUserResponseFactory::build($createSubscriptionResponse);
    }

    private function getSignatureCreateSubscription(Subscription $subscription): string
    {
        $signature = $this->merchantCode.
            $subscription->getCard()->getPan().
            $subscription->getCard()->getCvv().
            $this->terminal.
            $subscription->getAmount().
            $subscription->getCurrency().
            $this->password;

        return hash(self::SHA_512, $signature);
    }
}