## Установка
```bash
composer require jrazer/wooppay dev-master
```
## Использование
```php
$wooppay = new \jRazer\Wooppay\WooppayClient(
    'https://www.wooppay.com/api/xml',
    'username',
    'password'
);

$invoice = $wooppay->createInvoice(...);

$operationUrl = $invoice->operationUrl;
$operationId = $invoice->operationId;

$status = $wooppay->getOperationStatus($operationId);

if($status == \jRazer\Wooppay\WooppayClient::STATUS_DONE) {
    \jRazer\Wooppay\WooppayClient::sendCompleteResponse();
}
```
