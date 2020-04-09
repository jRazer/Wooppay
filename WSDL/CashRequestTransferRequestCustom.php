<?php

namespace jRazer\Wooppay\WSDL;

class CashRequestTransferRequestCustom
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $login
     * @param float $amount
     * @param string $description
     */
    public function __construct($login, $amount, $description)
    {
      $this->login = $login;
      $this->amount = $amount;
      $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \jRazer\Wooppay\WSDL\CashRequestTransferRequest
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
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
     * @return \jRazer\Wooppay\WSDL\CashRequestTransferRequest
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \jRazer\Wooppay\WSDL\CashRequestTransferRequest
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
