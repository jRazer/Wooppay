<?php

namespace jRazer\Wooppay\WSDL;

class ServiceGetCategoriesResponseDataCategoriesArray
{

    /**
     * @var ServiceGetCategoriesResponseDataCategories[] $ServiceGetCategoriesResponseDataCategoriesArray
     */
    protected $ServiceGetCategoriesResponseDataCategoriesArray = null;

    /**
     * @param ServiceGetCategoriesResponseDataCategories[] $ServiceGetCategoriesResponseDataCategoriesArray
     */
    public function __construct(array $ServiceGetCategoriesResponseDataCategoriesArray)
    {
      $this->ServiceGetCategoriesResponseDataCategoriesArray = $ServiceGetCategoriesResponseDataCategoriesArray;
    }

    /**
     * @return ServiceGetCategoriesResponseDataCategories[]
     */
    public function getServiceGetCategoriesResponseDataCategoriesArray()
    {
      return $this->ServiceGetCategoriesResponseDataCategoriesArray;
    }

    /**
     * @param ServiceGetCategoriesResponseDataCategories[] $ServiceGetCategoriesResponseDataCategoriesArray
     * @return \jRazer\Wooppay\WSDL\ServiceGetCategoriesResponseDataCategoriesArray
     */
    public function setServiceGetCategoriesResponseDataCategoriesArray(array $ServiceGetCategoriesResponseDataCategoriesArray)
    {
      $this->ServiceGetCategoriesResponseDataCategoriesArray = $ServiceGetCategoriesResponseDataCategoriesArray;
      return $this;
    }

}
