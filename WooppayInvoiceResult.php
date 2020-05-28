<?php

namespace jRazer\Wooppay;

use jRazer\Wooppay\Exception\WooppayException;
use jRazer\Wooppay\WSDL\XmlControllerService;
use jRazer\Wooppay\WSDL\CashCreateInvoiceExtended2Request;

/**
 * Class WooppayInvoiceResult
 * @package jRazer\Wooppay
 */
class WooppayInvoiceResult
{
    /**
     * @var string
     */
    public $operationUrl;
    /**
     * @var int
     */
    public $operationId;

    /**
     * @var XmlControllerService
     */
    protected $client;
    /**
     * @var CashCreateInvoiceByServiceRequest
     */
    protected $request;

    /**
     * @throws WooppayException
     */
    protected function create()
    {
        $invoice = $this->client->cash_createInvoice2Extended($this->request);

        $response = $invoice->getResponse();
        if ($response == null) {
            throw new WooppayException($invoice->getError_code());
        }

        $this->operationId = $response->getOperationId();
        $this->operationUrl = $response->getOperationUrl();
    }

    /**
     * WooppayInvoiceResult constructor.
     * @param XmlControllerService $client
     * @param CashCreateInvoiceByServiceRequest $request
     * @throws WooppayException
     */
    public function __construct($client, $request)
    {
        $this->client = $client;
        $this->request = $request;
        $this->create();
    }
}
