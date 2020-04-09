<?php

namespace jRazer\Wooppay\WSDL;

class CashPrepaidCardCommissionResponseDataCustom
{

    /**
     * @var int $commission
     */
    protected $commission = null;

    /**
     * @param int $commission
     */
    public function __construct($commission)
    {
      $this->commission = $commission;
    }

    /**
     * @return int
     */
    public function getCommission()
    {
      return $this->commission;
    }

    /**
     * @param int $commission
     * @return \jRazer\Wooppay\WSDL\CashPrepaidCardCommissionResponseData
     */
    public function setCommission($commission)
    {
      $this->commission = $commission;
      return $this;
    }

}
