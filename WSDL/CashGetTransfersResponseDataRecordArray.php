<?php

namespace jRazer\Wooppay\WSDL;

class CashGetTransfersResponseDataRecordArray
{

    /**
     * @var CashGetTransfersResponseDataRecord[] $CashGetTransfersResponseDataRecordArray
     */
    protected $CashGetTransfersResponseDataRecordArray = null;

    /**
     * @param CashGetTransfersResponseDataRecord[] $CashGetTransfersResponseDataRecordArray
     */
    public function __construct(array $CashGetTransfersResponseDataRecordArray)
    {
      $this->CashGetTransfersResponseDataRecordArray = $CashGetTransfersResponseDataRecordArray;
    }

    /**
     * @return CashGetTransfersResponseDataRecord[]
     */
    public function getCashGetTransfersResponseDataRecordArray()
    {
      return $this->CashGetTransfersResponseDataRecordArray;
    }

    /**
     * @param CashGetTransfersResponseDataRecord[] $CashGetTransfersResponseDataRecordArray
     * @return \jRazer\Wooppay\WSDL\CashGetTransfersResponseDataRecordArray
     */
    public function setCashGetTransfersResponseDataRecordArray(array $CashGetTransfersResponseDataRecordArray)
    {
      $this->CashGetTransfersResponseDataRecordArray = $CashGetTransfersResponseDataRecordArray;
      return $this;
    }

}
