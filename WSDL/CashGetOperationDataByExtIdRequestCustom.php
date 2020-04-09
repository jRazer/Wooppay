<?php

namespace jRazer\Wooppay\WSDL;

class CashGetOperationDataByExtIdRequestCustom
{

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @param string $externalId
     * @param int $type
     */
    public function __construct($externalId, $type)
    {
      $this->externalId = $externalId;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \jRazer\Wooppay\WSDL\CashGetOperationDataByExtIdRequest
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
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
     * @return \jRazer\Wooppay\WSDL\CashGetOperationDataByExtIdRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
