<?php

namespace jRazer\Wooppay\WSDL;

class CreateOperationCustom
{

    /**
     * @var string $base64Data
     */
    protected $base64Data = null;

    /**
     * @param string $base64Data
     */
    public function __construct($base64Data)
    {
      $this->base64Data = $base64Data;
    }

    /**
     * @return string
     */
    public function getBase64Data()
    {
      return $this->base64Data;
    }

    /**
     * @param string $base64Data
     * @return \jRazer\Wooppay\WSDL\CreateOperation
     */
    public function setBase64Data($base64Data)
    {
      $this->base64Data = $base64Data;
      return $this;
    }

}
