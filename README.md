## Установка
```bash
composer require jRazer/wooppay 1.0
```
## Использование
```php
$wooppay = new \jRazer\Wooppay\WooppayClient(
    'https://www.wooppay.com/api/xml',
    'username',
    'password'
);

$invoice = $wooppay->createInvoiceByService(...);

$operationUrl = $invoice->operationUrl;
$operationId = $invoice->operationId;

$status = $wooppay->getOperationStatus($operationId);

if($status == \jRazer\Wooppay\WooppayClient::STATUS_DONE) {
    \jRazer\Wooppay\WooppayClient::sendCompleteResponse();
}
```