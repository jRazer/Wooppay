<?php

namespace jRazer\Wooppay\WSDL;

class CoreUserSearchRequestCustom
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @param string $login
     */
    public function __construct($login)
    {
      $this->login = $login;
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
     * @return \jRazer\Wooppay\WSDL\CoreUserSearchRequest
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

}
