<?php

namespace jRazer\Wooppay\WSDL;

class CashReturnRequest
{

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @param int $operationId
     */
    public function __construct($operationId)
    {
      $this->operationId = $operationId;
    }

    /**
     * @return int
     */
    public function getOperationId()
    {
      return $this->operationId;
    }

    /**
     * @param int $operationId
     * @return \jRazer\Wooppay\WSDL\CashReturnRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
