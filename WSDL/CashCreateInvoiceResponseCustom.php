<?php

namespace jRazer\Wooppay\WSDL;

class CashCreateInvoiceResponseCustom
{

    /**
     * @var CashCreateInvoiceResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CashCreateInvoiceResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CashCreateInvoiceResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CashCreateInvoiceResponseData $response
     * @return \jRazer\Wooppay\WSDL\CashCreateInvoiceResponse
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return int
     */
    public function getError_code()
    {
      return $this->error_code;
    }

    /**
     * @param int $error_code
     * @return \jRazer\Wooppay\WSDL\CashCreateInvoiceResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
