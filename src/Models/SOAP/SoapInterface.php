<?php

namespace Paycomet\Sdk\Models\SOAP;

interface SoapInterface
{
    public function add_user(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_MERCHANT_PAN,
        ?string $DS_MERCHANT_EXPIRYDATE,
        ?string $DS_MERCHANT_CVV2,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_MERCHANT_CARDHOLDERNAME
    ): array;

    public function info_user(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP
    ): array;

    public function remove_user(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP
    ): array;

    public function execute_purchase(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_CURRENCY,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_MERCHANT_PRODUCTDESCRIPTION,
        ?string $DS_MERCHANT_OWNER,
        ?int $DS_MERCHANT_SCORING,
        ?string $DS_MERCHANT_DATA,
        ?string $DS_MERCHANT_MERCHANTDESCRIPTOR,
        ?string $DS_MERCHANT_SCA_EXCEPTION,
        ?string $DS_MERCHANT_TRX_TYPE,
        ?string $DS_ESCROW_TARGETS,
        ?int $DS_USER_INTERACTION
    ): array;

    public function execute_purchase_dcc(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_MERCHANT_PRODUCTDESCRIPTION,
        ?string $DS_MERCHANT_OWNER,
        ?string $DS_MERCHANT_MERCHANTDESCRIPTOR
    ): array;

    public function confirm_purchase_dcc(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_DCC_CURRENCY,
        ?string $DS_MERCHANT_DCC_SESSION,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE
    ): array;

    public function execute_refund(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_AUTHCODE,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_CURRENCY,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_MERCHANTDESCRIPTOR
    ): array;

    public function create_preauthorization(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_CURRENCY,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_MERCHANT_PRODUCTDESCRIPTION,
        ?string $DS_MERCHANT_OWNER,
        ?int $DS_MERCHANT_SCORING,
        ?string $DS_MERCHANT_DATA,
        ?string $DS_MERCHANT_MERCHANTDESCRIPTOR,
        ?string $DS_MERCHANT_SCA_EXCEPTION,
        ?string $DS_MERCHANT_TRX_TYPE,
        ?string $DS_ESCROW_TARGETS,
        ?int $DS_USER_INTERACTION
    ): array;

    public function preauthorization_confirm(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_MERCHANT_MERCHANTDESCRIPTOR
    ): array;

    public function preauthorization_cancel(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_IDUSER,
        ?string $DS_TOKEN_USER,
        ?string $DS_MERCHANT_AMOUNT,
        ?string $DS_MERCHANT_ORDER,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP
    ): array;

    public function create_subscription(
        ?string $DS_MERCHANT_MERCHANTCODE,
        ?string $DS_MERCHANT_TERMINAL,
        ?string $DS_MERCHANT_PAN,
        ?string $DS_MERCHANT_EXPIRYDATE,
        ?string $DS_MERCHANT_CVV2,
        ?string $DS_SUBSCRIPTION_STARTDATE,
        ?string $DS_SUBSCRIPTION_ENDDATE,
        ?string $DS_SUBSCRIPTION_ORDER,
        ?string $DS_SUBSCRIPTION_PERIODICITY,
        ?string $DS_SUBSCRIPTION_AMOUNT,
        ?string $DS_SUBSCRIPTION_CURRENCY,
        ?string $DS_MERCHANT_MERCHANTSIGNATURE,
        ?string $DS_ORIGINAL_IP,
        ?string $DS_EXECUTE,
        ?string $DS_MERCHANT_CARDHOLDERNAME,
        ?int $DS_MERCHANT_SCORING,
        ?string $DS_MERCHANT_DATA,
        ?string $DS_MERCHANT_SCA_EXCEPTION,
        ?string $DS_MERCHANT_TRX_TYPE,
        ?string $DS_ESCROW_TARGETS,
        ?int $DS_USER_INTERACTION
    ): array;
}