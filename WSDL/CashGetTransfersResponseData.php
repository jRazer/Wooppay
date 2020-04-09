<?php

namespace jRazer\Wooppay\WSDL;

class CashGetTransfersResponseData
{

    /**
     * @var CashGetTransfersResponseDataRecordArray $records
     */
    protected $records = null;

    /**
     * @var int $lastChanged
     */
    protected $lastChanged = null;

    /**
     * @param CashGetTransfersResponseDataRecordArray $records
     * @param int $lastChanged
     */
    public function __construct($records, $lastChanged)
    {
      $this->records = $records;
      $this->lastChanged = $lastChanged;
    }

    /**
     * @return CashGetTransfersResponseDataRecordArray
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param CashGetTransfersResponseDataRecordArray $records
     * @return \jRazer\Wooppay\WSDL\CashGetTransfersResponseData
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastChanged()
    {
      return $this->lastChanged;
    }

    /**
     * @param int $lastChanged
     * @return \jRazer\Wooppay\WSDL\CashGetTransfersResponseData
     */
    public function setLastChanged($lastChanged)
    {
      $this->lastChanged = $lastChanged;
      return $this;
    }

}
