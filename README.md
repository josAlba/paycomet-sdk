# Paycomet SDK
Realizar operaciones con la API de paycomet.

## Configurar
Modificar el fichero .env con tus datos.

```
PAYCOMET_MERCHANT_CODE='{tu-merchant-code}'
PAYCOMET_PASSWORD='{tu-password}'
PAYCOMET_TERMINAL='{tu-terminal}'

# Optional, dejar en blanco.
PAYCOMET_JET_ID='{tu-jet-id}' 
```

## Class
* PaymentIframe: Realizar el pago a través de una url de paycomet
* PaymentSoap: Realizar el paga a través de la Api.
* SubscriptionsSoap: Realiza la suscripción por Api.
* UsersSoap: Realiza acciones de usuario por Api.

## Enlaces
* [PAYCOMET/php-bankstore](https://github.com/PAYCOMET/php-bankstore)
* [Tarjetas de prueba](https://docs.paycomet.com/es/recursos/testcards)