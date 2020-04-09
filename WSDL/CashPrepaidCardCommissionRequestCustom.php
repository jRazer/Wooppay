<?php

namespace jRazer\Wooppay\WSDL;

class CashPrepaidCardCommissionRequestCustom
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @param float $amount
     */
    public function __construct($amount)
    {
      $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \jRazer\Wooppay\WSDL\CashPrepaidCardCommissionRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
