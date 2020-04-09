<?php

namespace jRazer\Wooppay\WSDL;

class CoreBeelineSMSNotificationRequest
{

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var string $sender
     */
    protected $sender = null;

    /**
     * @param string $phone
     * @param string $message
     * @param string $sender
     */
    public function __construct($phone, $message, $sender)
    {
      $this->phone = $phone;
      $this->message = $message;
      $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \jRazer\Wooppay\WSDL\CoreBeelineSMSNotificationRequest
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \jRazer\Wooppay\WSDL\CoreBeelineSMSNotificationRequest
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return string
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param string $sender
     * @return \jRazer\Wooppay\WSDL\CoreBeelineSMSNotificationRequest
     */
    public function setSender($sender)
    {
      $this->sender = $sender;
      return $this;
    }

}
