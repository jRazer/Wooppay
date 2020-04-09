<?php

namespace jRazer\Wooppay\WSDL;

class stringArrayCustom
{

    /**
     * @var string[] $stringArray
     */
    protected $stringArray = null;

    /**
     * @param string[] $stringArray
     */
    public function __construct(array $stringArray)
    {
      $this->stringArray = $stringArray;
    }

    /**
     * @return string[]
     */
    public function getStringArray()
    {
      return $this->stringArray;
    }

    /**
     * @param string[] $stringArray
     * @return \jRazer\Wooppay\WSDL\stringArray
     */
    public function setStringArray(array $stringArray)
    {
      $this->stringArray = $stringArray;
      return $this;
    }

}
