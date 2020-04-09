<?php

namespace jRazer\Wooppay\WSDL;

class CashCashOutInputDataResponseCustom
{

    /**
     * @var int $error_code
     */
    protected $error_code = null;

    /**
     * @param int $error_code
     */
    public function __construct($error_code)
    {
      $this->error_code = $error_code;
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
     * @return \jRazer\Wooppay\WSDL\CashCashOutInputDataResponse
     */
    public function setError_code($error_code)
    {
      $this->error_code = $error_code;
      return $this;
    }

}
