<?php

namespace jRazer\Wooppay\WSDL;

class CoreRequestConfirmationCodeRequestCustom
{

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @param string $phone
     */
    public function __construct($phone)
    {
      $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \jRazer\Wooppay\WSDL\CoreRequestConfirmationCodeRequest
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

}
