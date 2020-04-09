<?php

namespace jRazer\Wooppay\WSDL;

class CashSetOperationsStatusRequestRecordCustom
{

    /**
     * @var string $ext_id
     */
    protected $ext_id = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @param string $ext_id
     * @param string $description
     * @param int $status
     * @param string $date
     */
    public function __construct($ext_id, $description, $status, $date)
    {
      $this->ext_id = $ext_id;
      $this->description = $description;
      $this->status = $status;
      $this->date = $date;
    }

    /**
     * @return string
     */
    public function getExt_id()
    {
      return $this->ext_id;
    }

    /**
     * @param string $ext_id
     * @return \jRazer\Wooppay\WSDL\CashSetOperationsStatusRequestRecord
     */
    public function setExt_id($ext_id)
    {
      $this->ext_id = $ext_id;
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
     * @return \jRazer\Wooppay\WSDL\CashSetOperationsStatusRequestRecord
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \jRazer\Wooppay\WSDL\CashSetOperationsStatusRequestRecord
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \jRazer\Wooppay\WSDL\CashSetOperationsStatusRequestRecord
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

}
