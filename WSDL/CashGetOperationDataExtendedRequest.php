<?php

namespace jRazer\Wooppay\WSDL;

class CashGetOperationDataExtendedRequest
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
     * @return \jRazer\Wooppay\WSDL\CashGetOperationDataExtendedRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
