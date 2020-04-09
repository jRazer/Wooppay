<?php

namespace jRazer\Wooppay\WSDL;

class CashGetOperationDataRequestCustom
{

    /**
     * @var intArray $operationId
     */
    protected $operationId = null;

    /**
     * @param intArray $operationId
     */
    public function __construct($operationId)
    {
      $this->operationId = $operationId;
    }

    /**
     * @return intArray
     */
    public function getOperationId()
    {
      return $this->operationId;
    }

    /**
     * @param intArray $operationId
     * @return \jRazer\Wooppay\WSDL\CashGetOperationDataRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
