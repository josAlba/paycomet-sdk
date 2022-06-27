<?php

namespace Paycomet\Sdk;

use Paycomet\Sdk\Factory\SOAP\AddUserResponseFactory;
use Paycomet\Sdk\Factory\SOAP\InfoUserResponseFactory;
use Paycomet\Sdk\Factory\SOAP\RemoveUserResponseFactory;
use Paycomet\Sdk\Models\Card;
use Paycomet\Sdk\Models\SOAP\AddUserResponse;
use Paycomet\Sdk\Models\SOAP\InfoUserResponse;
use Paycomet\Sdk\Models\SOAP\RemoveUserResponse;
use Paycomet\Sdk\Models\User;

class Users extends Paycomet
{
    public function addUser(Card $cardModel): AddUserResponse
    {
        $signature = $this->getSignatureCard($cardModel);
        $ip = $this->GetClientIp();

        $addUser = $this->getSoapClient()->add_user(
            $this->merchantCode,
            $this->terminal,
            $cardModel->getPan(),
            $cardModel->getExpirate(),
            $cardModel->getCvv(),
            $signature,
            $ip
        );

        return AddUserResponseFactory::build($addUser);
    }

    public function infoUser(User $userModel): InfoUserResponse
    {
        $signature = $this->getSignatureUser($userModel);
        $ip = $this->GetClientIp();

        $infoUser = $this->getSoapClient()->info_user(
            $this->merchantCode,
            $this->terminal,
            $userModel->getUserId(),
            $userModel->getToken(),
            $signature,
            $ip
        );

        return InfoUserResponseFactory::build($infoUser);
    }

    public function removeUser(User $userModel): RemoveUserResponse
    {
        $signature = $this->getSignatureUser($userModel);
        $ip = $this->GetClientIp();

        $removeUser = $this->getSoapClient()->remove_user(
            $this->merchantCode,
            $this->terminal,
            $userModel->getUserId(),
            $userModel->getToken(),
            $signature,
            $ip
        );

        return RemoveUserResponseFactory::build($removeUser);
    }

    private function getSignatureUser(User $userModel): string
    {
        $signature = $this->merchantCode.$userModel->getUserId().$userModel->getToken().$this->terminal.$this->password;

        return hash(self::SHA_512, $signature);
    }

    private function getSignatureCard(Card $cardModel): string
    {
        $signature = $this->merchantCode.$cardModel->getPan().$cardModel->getCvv().$this->terminal.$this->password;

        return hash(self::SHA_512, $signature);
    }
}