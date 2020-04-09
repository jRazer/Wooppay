<?php

namespace jRazer\Wooppay\WSDL;

class CashCashOutCompleteRequest
{

    /**
     * @var int $operationID
     */
    protected $operationID = null;

    /**
     * @param int $operationID
     */
    public function __construct($operationID)
    {
      $this->operationID = $operationID;
    }

    /**
     * @return int
     */
    public function getOperationID()
    {
      return $this->operationID;
    }

    /**
     * @param int $operationID
     * @return \jRazer\Wooppay\WSDL\CashCashOutCompleteRequest
     */
    public function setOperationID($operationID)
    {
      $this->operationID = $operationID;
      return $this;
    }

}
