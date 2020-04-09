<?php

namespace jRazer\Wooppay\WSDL;

class CashGetOperationReceiptRequest
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
     * @return \jRazer\Wooppay\WSDL\CashGetOperationReceiptRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

}
