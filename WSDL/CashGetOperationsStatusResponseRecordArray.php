<?php

namespace jRazer\Wooppay\WSDL;

class CashGetOperationsStatusResponseRecordArray
{

    /**
     * @var CashGetOperationsStatusResponseRecord[] $CashGetOperationsStatusResponseRecordArray
     */
    protected $CashGetOperationsStatusResponseRecordArray = null;

    /**
     * @param CashGetOperationsStatusResponseRecord[] $CashGetOperationsStatusResponseRecordArray
     */
    public function __construct(array $CashGetOperationsStatusResponseRecordArray)
    {
      $this->CashGetOperationsStatusResponseRecordArray = $CashGetOperationsStatusResponseRecordArray;
    }

    /**
     * @return CashGetOperationsStatusResponseRecord[]
     */
    public function getCashGetOperationsStatusResponseRecordArray()
    {
      return $this->CashGetOperationsStatusResponseRecordArray;
    }

    /**
     * @param CashGetOperationsStatusResponseRecord[] $CashGetOperationsStatusResponseRecordArray
     * @return \jRazer\Wooppay\WSDL\CashGetOperationsStatusResponseRecordArray
     */
    public function setCashGetOperationsStatusResponseRecordArray(array $CashGetOperationsStatusResponseRecordArray)
    {
      $this->CashGetOperationsStatusResponseRecordArray = $CashGetOperationsStatusResponseRecordArray;
      return $this;
    }

}
