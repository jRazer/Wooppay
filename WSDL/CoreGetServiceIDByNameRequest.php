<?php

namespace jRazer\Wooppay\WSDL;

class CoreGetServiceIDByNameRequest
{

    /**
     * @var string $service_name
     */
    protected $service_name = null;

    /**
     * @param string $service_name
     */
    public function __construct($service_name)
    {
      $this->service_name = $service_name;
    }

    /**
     * @return string
     */
    public function getService_name()
    {
      return $this->service_name;
    }

    /**
     * @param string $service_name
     * @return \jRazer\Wooppay\WSDL\CoreGetServiceIDByNameRequest
     */
    public function setService_name($service_name)
    {
      $this->service_name = $service_name;
      return $this;
    }

}
