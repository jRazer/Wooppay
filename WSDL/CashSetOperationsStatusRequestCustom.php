<?php

namespace jRazer\Wooppay\WSDL;

class CashSetOperationsStatusRequestCustom
{

    /**
     * @var CashSetOperationsStatusRequestRecordArray $records
     */
    protected $records = null;

    /**
     * @param CashSetOperationsStatusRequestRecordArray $records
     */
    public function __construct($records)
    {
      $this->records = $records;
    }

    /**
     * @return CashSetOperationsStatusRequestRecordArray
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param CashSetOperationsStatusRequestRecordArray $records
     * @return \jRazer\Wooppay\WSDL\CashSetOperationsStatusRequest
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
