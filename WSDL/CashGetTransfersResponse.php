<?php

namespace jRazer\Wooppay\WSDL;

class CashGetTransfersResponse
{

    /**
     * @var CashGetTransfersResponseData $response
     */
    protected $response = null;

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param CashGetTransfersResponseData $response
     * @param int $error_code
     */
    public function __construct($response, $error_code)
    {
      $this->response = $response;
      $this->error_code = $error_code;
    }

    /**
     * @return CashGetTransfersResponseData
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CashGetTransfersResponseData $response
     * @return \jRazer\Wooppay\WSDL\CashGetTransfersResponse
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
     * @return \jRazer\Wooppay\WSDL\CashGetTransfersResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
