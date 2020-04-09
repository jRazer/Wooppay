<?php

namespace jRazer\Wooppay\WSDL;

class CashGetOperationDataExtendedResponseData
{

    /**
     * @var CashGetOperationDataExtendedResponseDataRecordArray $records
     */
    protected $records = null;

    /**
     * @param CashGetOperationDataExtendedResponseDataRecordArray $records
     */
    public function __construct($records)
    {
      $this->records = $records;
    }

    /**
     * @return CashGetOperationDataExtendedResponseDataRecordArray
     */
    public function getRecords()
    {
      return $this->records;
    }

    /**
     * @param CashGetOperationDataExtendedResponseDataRecordArray $records
     * @return \jRazer\Wooppay\WSDL\CashGetOperationDataExtendedResponseData
     */
    public function setRecords($records)
    {
      $this->records = $records;
      return $this;
    }

}
