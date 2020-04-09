<?php

namespace jRazer\Wooppay\WSDL;

class CashConfirmOperationRequestCustom
{

    /**
     * @var int $operationId
     */
    protected $operationId = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @param int $operationId
     * @param int $type
     */
    public function __construct($operationId, $type)
    {
      $this->operationId = $operationId;
      $this->type = $type;
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
     * @return \jRazer\Wooppay\WSDL\CashConfirmOperationRequest
     */
    public function setOperationId($operationId)
    {
      $this->operationId = $operationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \jRazer\Wooppay\WSDL\CashConfirmOperationRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
