<?php

namespace jRazer\Wooppay;

use jRazer\Wooppay\Exception\WooppayException;
use jRazer\Wooppay\WSDL\XmlControllerService;
use jRazer\Wooppay\WSDL\CashCreateInvoiceExtended2Request;
use jRazer\Wooppay\WSDL\CashCreateInvoiceByServiceRequest;
use jRazer\Wooppay\WSDL\CashCreateInvoiceRequest;

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
    protected function create($service = false)
    {

	if ($service == false)
    	    $invoice = $this->client->cash_createInvoice2Extended($this->request);
	else if ($service == 1)
	    $invoice = $this->client->cash_createInvoiceByService($this->request);
	else if ($service == 2)
	    $invoice = $this->client->cash_createInvoice($this->request);

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
    public function __construct($client, $request, $service = false)
    {
        $this->client = $client;
        $this->request = $request;
        $this->create($service);
    }
}
