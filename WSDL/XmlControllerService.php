<?php

namespace jRazer\Wooppay\WSDL;

class XmlControllerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CoreLoginRequest' => 'jRazer\\Wooppay\\WSDL\\CoreLoginRequest',
  'CoreLoginResponse' => 'jRazer\\Wooppay\\WSDL\\CoreLoginResponse',
  'CoreLoginResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreLoginResponseData',
  'stringArray' => 'jRazer\\Wooppay\\WSDL\\stringArray',
  'CoreLogoutRequest' => 'jRazer\\Wooppay\\WSDL\\CoreLogoutRequest',
  'CoreLogoutResponse' => 'jRazer\\Wooppay\\WSDL\\CoreLogoutResponse',
  'CoreSmthRequest' => 'jRazer\\Wooppay\\WSDL\\CoreSmthRequest',
  'CoreSmthResponse' => 'jRazer\\Wooppay\\WSDL\\CoreSmthResponse',
  'CashCreateOperationRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateOperationRequest',
  'CashCreateOperationResponse' => 'jRazer\\Wooppay\\WSDL\\CashCreateOperationResponse',
  'CashCreateOperationResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCreateOperationResponseData',
  'CashConfirmOperationRequest' => 'jRazer\\Wooppay\\WSDL\\CashConfirmOperationRequest',
  'CashConfirmOperationResponse' => 'jRazer\\Wooppay\\WSDL\\CashConfirmOperationResponse',
  'CashConfirmOperationExtRequest' => 'jRazer\\Wooppay\\WSDL\\CashConfirmOperationExtRequest',
  'CashDischargementRequest' => 'jRazer\\Wooppay\\WSDL\\CashDischargementRequest',
  'CashDischargementResponse' => 'jRazer\\Wooppay\\WSDL\\CashDischargementResponse',
  'CashTransferRequest' => 'jRazer\\Wooppay\\WSDL\\CashTransferRequest',
  'CashTransferResponse' => 'jRazer\\Wooppay\\WSDL\\CashTransferResponse',
  'CashGetTransfersRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersRequest',
  'intArray' => 'jRazer\\Wooppay\\WSDL\\intArray',
  'CashGetTransfersResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponse',
  'CashGetTransfersResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseData',
  'CashGetTransfersResponseDataRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordArray',
  'CashGetTransfersResponseDataRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecord',
  'CashGetTransfersResponseDataRecordService' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordService',
  'CashGetCommissionRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetCommissionRequest',
  'CashGetCommissionResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetCommissionResponse',
  'CashGetCommissionResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetCommissionResponseData',
  'CoreGetServiceIDByNameRequest' => 'jRazer\\Wooppay\\WSDL\\CoreGetServiceIDByNameRequest',
  'CoreGetServiceIDByNameResponse' => 'jRazer\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponse',
  'CoreGetServiceIDByNameResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponseData',
  'CashGetBalanceRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetBalanceRequest',
  'CashGetBalanceResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetBalanceResponse',
  'CashGetBalanceResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetBalanceResponseData',
  'ServiceGetCategoriesRequest' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesRequest',
  'ServiceGetCategoriesResponse' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponse',
  'ServiceGetCategoriesResponseData' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseData',
  'ServiceGetCategoriesResponseDataCategoriesArray' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategoriesArray',
  'ServiceGetCategoriesResponseDataCategories' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategories',
  'ServiceGetCategoriesResponseDataServicesArray' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServicesArray',
  'ServiceGetCategoriesResponseDataServices' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServices',
  'CashDeclineRequest' => 'jRazer\\Wooppay\\WSDL\\CashDeclineRequest',
  'CashDeclineResponse' => 'jRazer\\Wooppay\\WSDL\\CashDeclineResponse',
  'CashSetOperationsStatusRequest' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusRequest',
  'CashSetOperationsStatusRequestRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecordArray',
  'CashSetOperationsStatusRequestRecord' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecord',
  'CashSetOperationsStatusResponse' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusResponse',
  'CashSetOperationsStatusResponseRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecordArray',
  'CashSetOperationsStatusResponseRecord' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecord',
  'CashGetOperationsStatusRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusRequest',
  'CashGetOperationsStatusResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusResponse',
  'CashGetOperationsStatusResponseRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecordArray',
  'CashGetOperationsStatusResponseRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecord',
  'CashCashOutRequest' => 'jRazer\\Wooppay\\WSDL\\CashCashOutRequest',
  'CashCashOutResponse' => 'jRazer\\Wooppay\\WSDL\\CashCashOutResponse',
  'CashCashOutResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCashOutResponseData',
  'CashCashOutCompleteRequest' => 'jRazer\\Wooppay\\WSDL\\CashCashOutCompleteRequest',
  'CashCashOutCompleteResponse' => 'jRazer\\Wooppay\\WSDL\\CashCashOutCompleteResponse',
  'CashCashOutInputDataRequest' => 'jRazer\\Wooppay\\WSDL\\CashCashOutInputDataRequest',
  'CashCashOutInputDataResponse' => 'jRazer\\Wooppay\\WSDL\\CashCashOutInputDataResponse',
  'CashReturnRequest' => 'jRazer\\Wooppay\\WSDL\\CashReturnRequest',
  'CashReturnResponse' => 'jRazer\\Wooppay\\WSDL\\CashReturnResponse',
  'CashReturnPartialRequest' => 'jRazer\\Wooppay\\WSDL\\CashReturnPartialRequest',
  'CashReturnPartialResponse' => 'jRazer\\Wooppay\\WSDL\\CashReturnPartialResponse',
  'CashMobileRefundRequest' => 'jRazer\\Wooppay\\WSDL\\CashMobileRefundRequest',
  'CashMobileRefundResponse' => 'jRazer\\Wooppay\\WSDL\\CashMobileRefundResponse',
  'CoreUserSearchRequest' => 'jRazer\\Wooppay\\WSDL\\CoreUserSearchRequest',
  'CoreUserSearchResponse' => 'jRazer\\Wooppay\\WSDL\\CoreUserSearchResponse',
  'CoreUserSearchResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreUserSearchResponseData',
  'SystemGetConfigRequest' => 'jRazer\\Wooppay\\WSDL\\SystemGetConfigRequest',
  'SystemGetConfigResponse' => 'jRazer\\Wooppay\\WSDL\\SystemGetConfigResponse',
  'SystemGetConfigResponseData' => 'jRazer\\Wooppay\\WSDL\\SystemGetConfigResponseData',
  'CashRequestTransferRequest' => 'jRazer\\Wooppay\\WSDL\\CashRequestTransferRequest',
  'CashRequestTransferResponse' => 'jRazer\\Wooppay\\WSDL\\CashRequestTransferResponse',
  'CashRequestTransferResponseData' => 'jRazer\\Wooppay\\WSDL\\CashRequestTransferResponseData',
  'CashInvoicingRequest' => 'jRazer\\Wooppay\\WSDL\\CashInvoicingRequest',
  'CashInvoicingResponse' => 'jRazer\\Wooppay\\WSDL\\CashInvoicingResponse',
  'CashInvoicingResponseData' => 'jRazer\\Wooppay\\WSDL\\CashInvoicingResponseData',
  'CashGetServiceFieldsRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsRequest',
  'CashGetServiceFieldsResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsResponse',
  'CashGetServiceFieldsResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsResponseData',
  'CashGetServiceFieldsExtendedRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsExtendedRequest',
  'CashCheckServiceFieldsRequest' => 'jRazer\\Wooppay\\WSDL\\CashCheckServiceFieldsRequest',
  'CashCheckServiceFieldsResponse' => 'jRazer\\Wooppay\\WSDL\\CashCheckServiceFieldsResponse',
  'CashCheckServiceFieldsResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCheckServiceFieldsResponseData',
  'CashGetOperationReceiptRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationReceiptRequest',
  'CashGetOperationReceiptResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationReceiptResponse',
  'CashGetOperationReceiptResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationReceiptResponseData',
  'CashGetOperationDataRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataRequest',
  'CashGetOperationDataResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponse',
  'CashGetOperationDataResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseData',
  'CashGetOperationDataResponseDataRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecordArray',
  'CashGetOperationDataResponseDataRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecord',
  'CoreUserExistsRequest' => 'jRazer\\Wooppay\\WSDL\\CoreUserExistsRequest',
  'CoreUserExistsResponse' => 'jRazer\\Wooppay\\WSDL\\CoreUserExistsResponse',
  'CashCreateInvoiceRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceRequest',
  'CashCreateInvoiceResponse' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceResponse',
  'CashCreateInvoiceResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceResponseData',
  'CashCreateInvoiceExtendedRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceExtendedRequest',
  'CashCreateInvoiceExtended2Request' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceExtended2Request',
  'CashCreateInvoiceByServiceRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceByServiceRequest',
  'CashCreateInvoiceWithCurrencyRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceWithCurrencyRequest',
  'CashPrepaidCardPerformRequest' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardPerformRequest',
  'CashPrepaidCardPerformResponse' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardPerformResponse',
  'CashPrepaidCardPerformResponseData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardPerformResponseData',
  'CashPrepaidCardRequest' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardRequest',
  'CashPrepaidCardRequestData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardRequestData',
  'CashPrepaidCardResponse' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardResponse',
  'CashPrepaidCardResponseData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardResponseData',
  'CashPrepaidCardCommissionRequest' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardCommissionRequest',
  'CashPrepaidCardCommissionResponse' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponse',
  'CashPrepaidCardCommissionResponseData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponseData',
  'CreateOperation' => 'jRazer\\Wooppay\\WSDL\\CreateOperation',
  'CreateOperationResponse' => 'jRazer\\Wooppay\\WSDL\\CreateOperationResponse',
  'CreateOperationRequest' => 'jRazer\\Wooppay\\WSDL\\CreateOperationRequest',
  'PayConfirmRequest' => 'jRazer\\Wooppay\\WSDL\\PayConfirmRequest',
  'PayTransferConfirmRequest' => 'jRazer\\Wooppay\\WSDL\\PayTransferConfirmRequest',
  'CoreRequestConfirmationCodeRequest' => 'jRazer\\Wooppay\\WSDL\\CoreRequestConfirmationCodeRequest',
  'CoreRequestConfirmationCodeResponse' => 'jRazer\\Wooppay\\WSDL\\CoreRequestConfirmationCodeResponse',
  'CoreBeelineSMSNotificationRequest' => 'jRazer\\Wooppay\\WSDL\\CoreBeelineSMSNotificationRequest',
  'CoreBeelineSMSNotificationResponse' => 'jRazer\\Wooppay\\WSDL\\CoreBeelineSMSNotificationResponse',
  'CoreKcellSMSNotificationRequest' => 'jRazer\\Wooppay\\WSDL\\CoreKcellSMSNotificationRequest',
  'CoreKcellSMSNotificationResponse' => 'jRazer\\Wooppay\\WSDL\\CoreKcellSMSNotificationResponse',
  'CashGetReceiptForTransactionRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetReceiptForTransactionRequest',
  'CashGetReceiptForTransactionResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponse',
  'CashGetReceiptForTransactionResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponseData',
  'CoreGetMobileOperatorRequest' => 'jRazer\\Wooppay\\WSDL\\CoreGetMobileOperatorRequest',
  'CoreGetMobileOperatorResponse' => 'jRazer\\Wooppay\\WSDL\\CoreGetMobileOperatorResponse',
  'CoreGetMobileOperatorResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreGetMobileOperatorResponseData',
  'CashGetOperationDataExtendedRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedRequest',
  'CashGetOperationDataExtendedResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponse',
  'CashGetOperationDataExtendedResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseData',
  'CashGetOperationDataExtendedResponseDataRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecordArray',
  'CashGetOperationDataExtendedResponseDataRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecord',
  'CashGetOperationDataByExtIdRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataByExtIdRequest',
  'CashGetOperationDataByExtIdResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponse',
  'CashGetOperationDataByExtIdResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponseData',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.wooppay.com/api/xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Login action
     *
     * @param CoreLoginRequest $coreLoginRequest
     * @return CoreLoginResponse
     */
    public function core_login(CoreLoginRequest $coreLoginRequest)
    {
      return $this->__soapCall('core_login', array($coreLoginRequest));
    }

    /**
     * Logout action
     *
     * @param CoreLogoutRequest $coreLogoutRequest
     * @return CoreLogoutResponse
     */
    public function core_logout(CoreLogoutRequest $coreLogoutRequest)
    {
      return $this->__soapCall('core_logout', array($coreLogoutRequest));
    }

    /**
     * Test action
     *
     * @param CoreSmthRequest $coreSmthRequest
     * @return CoreSmthResponse
     */
    public function core_smth(CoreSmthRequest $coreSmthRequest)
    {
      return $this->__soapCall('core_smth', array($coreSmthRequest));
    }

    /**
     * Create new money operation
     *
     * @param CashCreateOperationRequest $cashCreateOperationRequest
     * @return CashCreateOperationResponse
     */
    public function cash_createOperation(CashCreateOperationRequest $cashCreateOperationRequest)
    {
      return $this->__soapCall('cash_createOperation', array($cashCreateOperationRequest));
    }

    /**
     * Confirm money operation
     *
     * @param CashConfirmOperationRequest $cashConfirmOperationRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperation(CashConfirmOperationRequest $cashConfirmOperationRequest)
    {
      return $this->__soapCall('cash_confirmOperation', array($cashConfirmOperationRequest));
    }

    /**
     * Confirm money operation with confirmation code
     *
     * @param CashConfirmOperationExtRequest $cashConfirmOperationExtRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperationExt(CashConfirmOperationExtRequest $cashConfirmOperationExtRequest)
    {
      return $this->__soapCall('cash_confirmOperationExt', array($cashConfirmOperationExtRequest));
    }

    /**
     * Dischargement money
     *
     * @param CashDischargementRequest $cashDischargementRequest
     * @return CashDischargementResponse
     */
    public function cash_dischargement(CashDischargementRequest $cashDischargementRequest)
    {
      return $this->__soapCall('cash_dischargement', array($cashDischargementRequest));
    }

    /**
     * Transfer money
     *
     * @param CashTransferRequest $cashTransferRequest
     * @return CashTransferResponse
     */
    public function cash_transfer(CashTransferRequest $cashTransferRequest)
    {
      return $this->__soapCall('cash_transfer', array($cashTransferRequest));
    }

    /**
     * Get transfer/payment list
     *
     * @param CashGetTransfersRequest $cashGetTransfersRequest
     * @return CashGetTransfersResponse
     */
    public function cash_getTransfers(CashGetTransfersRequest $cashGetTransfersRequest)
    {
      return $this->__soapCall('cash_getTransfers', array($cashGetTransfersRequest));
    }

    /**
     * Get commission
     *
     * @param CashGetCommissionRequest $cashGetCommissionRequest
     * @return CashGetCommissionResponse
     */
    public function cash_getCommission(CashGetCommissionRequest $cashGetCommissionRequest)
    {
      return $this->__soapCall('cash_getCommission', array($cashGetCommissionRequest));
    }

    /**
     * Get service id
     *
     * @param CoreGetServiceIDByNameRequest $cashGetServiceIDByNameRequest
     * @return CoreGetServiceIDByNameResponse
     */
    public function core_getServiceIDByName(CoreGetServiceIDByNameRequest $cashGetServiceIDByNameRequest)
    {
      return $this->__soapCall('core_getServiceIDByName', array($cashGetServiceIDByNameRequest));
    }

    /**
     * @param CashGetBalanceRequest $cashGetBalanceRequest
     * @return CashGetBalanceResponse
     */
    public function cash_getBalance(CashGetBalanceRequest $cashGetBalanceRequest)
    {
      return $this->__soapCall('cash_getBalance', array($cashGetBalanceRequest));
    }

    /**
     * get categories
     *
     * @param ServiceGetCategoriesRequest $serviceGetCategoriesRequest
     * @return ServiceGetCategoriesResponse
     */
    public function service_getCategories(ServiceGetCategoriesRequest $serviceGetCategoriesRequest)
    {
      return $this->__soapCall('service_getCategories', array($serviceGetCategoriesRequest));
    }

    /**
     * Cancels/declines operation
     *
     * @param CashDeclineRequest $cashDeclineRequest
     * @return CashDeclineResponse
     */
    public function cash_decline(CashDeclineRequest $cashDeclineRequest)
    {
      return $this->__soapCall('cash_decline', array($cashDeclineRequest));
    }

    /**
     * Set operations status
     *
     * @param CashSetOperationsStatusRequest $cashSetOperationsStatusRequest
     * @return CashSetOperationsStatusResponse
     */
    public function cash_setOperationsStatus(CashSetOperationsStatusRequest $cashSetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_setOperationsStatus', array($cashSetOperationsStatusRequest));
    }

    /**
     * Get operations status
     *
     * @param CashGetOperationsStatusRequest $cashGetOperationsStatusRequest
     * @return CashGetOperationsStatusResponse
     */
    public function cash_getOperationsStatus(CashGetOperationsStatusRequest $cashGetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_getOperationsStatus', array($cashGetOperationsStatusRequest));
    }

    /**
     * Cash out
     *
     * @param CashCashOutRequest $cashCashOutRequest
     * @return CashCashOutResponse
     */
    public function cash_cashOut(CashCashOutRequest $cashCashOutRequest)
    {
      return $this->__soapCall('cash_cashOut', array($cashCashOutRequest));
    }

    /**
     * Cash out complete
     *
     * @param CashCashOutCompleteRequest $cashCashOutCompleteRequest
     * @return CashCashOutCompleteResponse
     */
    public function cash_cashOutComplete(CashCashOutCompleteRequest $cashCashOutCompleteRequest)
    {
      return $this->__soapCall('cash_cashOutComplete', array($cashCashOutCompleteRequest));
    }

    /**
     * Cash out input data
     *
     * @param CashCashOutInputDataRequest $cashCashOutInputDataRequest
     * @return CashCashOutInputDataResponse
     */
    public function cash_cashOutInputData(CashCashOutInputDataRequest $cashCashOutInputDataRequest)
    {
      return $this->__soapCall('cash_cashOutInputData', array($cashCashOutInputDataRequest));
    }

    /**
     * Return payment operation
     *
     * @param CashReturnRequest $cashReturnRequest
     * @return CashReturnResponse
     */
    public function cash_paymentReturn(CashReturnRequest $cashReturnRequest)
    {
      return $this->__soapCall('cash_paymentReturn', array($cashReturnRequest));
    }

    /**
     * Partial return payment operation
     *
     * @param CashReturnPartialRequest $cashReturnPartialRequest
     * @return CashReturnPartialResponse
     */
    public function cash_paymentReturnPartial(CashReturnPartialRequest $cashReturnPartialRequest)
    {
      return $this->__soapCall('cash_paymentReturnPartial', array($cashReturnPartialRequest));
    }

    /**
     * Refund mobile payment operation
     *
     * @param CashMobileRefundRequest $cashMobileRefundRequest
     * @return CashMobileRefundResponse
     */
    public function cash_mobileRefund(CashMobileRefundRequest $cashMobileRefundRequest)
    {
      return $this->__soapCall('cash_mobileRefund', array($cashMobileRefundRequest));
    }

    /**
     * User search
     *
     * @param CoreUserSearchRequest $coreUserSearchRequest
     * @return CoreUserSearchResponse
     */
    public function core_userSearch(CoreUserSearchRequest $coreUserSearchRequest)
    {
      return $this->__soapCall('core_userSearch', array($coreUserSearchRequest));
    }

    /**
     * Get system config
     *
     * @param SystemGetConfigRequest $systemGetConfigRequest
     * @return SystemGetConfigResponse
     */
    public function system_getConfig(SystemGetConfigRequest $systemGetConfigRequest)
    {
      return $this->__soapCall('system_getConfig', array($systemGetConfigRequest));
    }

    /**
     * Send transfer request
     *
     * @param CashRequestTransferRequest $cashRequestTransferRequest
     * @return CashRequestTransferResponse
     */
    public function cash_requestTransfer(CashRequestTransferRequest $cashRequestTransferRequest)
    {
      return $this->__soapCall('cash_requestTransfer', array($cashRequestTransferRequest));
    }

    /**
     * Send invoice
     *
     * @param CashInvoicingRequest $cashInvoicingRequest
     * @return CashInvoicingResponse
     */
    public function cash_invoicing(CashInvoicingRequest $cashInvoicingRequest)
    {
      return $this->__soapCall('cash_invoicing', array($cashInvoicingRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsRequest $cashGetServiceFieldsRequest
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFields(CashGetServiceFieldsRequest $cashGetServiceFieldsRequest)
    {
      return $this->__soapCall('cash_getServiceFields', array($cashGetServiceFieldsRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsExtendedRequest $cashGetServiceFieldsExtended
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFieldsExtended(CashGetServiceFieldsExtendedRequest $cashGetServiceFieldsExtended)
    {
      return $this->__soapCall('cash_getServiceFieldsExtended', array($cashGetServiceFieldsExtended));
    }

    /**
     * Check service fields
     *
     * @param CashCheckServiceFieldsRequest $cashCheckServiceFieldsRequest
     * @return CashCheckServiceFieldsResponse
     */
    public function cash_checkServiceFields(CashCheckServiceFieldsRequest $cashCheckServiceFieldsRequest)
    {
      return $this->__soapCall('cash_checkServiceFields', array($cashCheckServiceFieldsRequest));
    }

    /**
     * Get operation receipt
     *
     * @param CashGetOperationReceiptRequest $cashGetOperationReceiptRequest
     * @return CashGetOperationReceiptResponse
     */
    public function cash_getOperationReceipt(CashGetOperationReceiptRequest $cashGetOperationReceiptRequest)
    {
      return $this->__soapCall('cash_getOperationReceipt', array($cashGetOperationReceiptRequest));
    }

    /**
     * @param CashGetOperationDataRequest $cashGetOperationDataRequest
     * @return CashGetOperationDataResponse
     */
    public function cash_getOperationData(CashGetOperationDataRequest $cashGetOperationDataRequest)
    {
      return $this->__soapCall('cash_getOperationData', array($cashGetOperationDataRequest));
    }

    /**
     * User existing checking
     *
     * @param CoreUserExistsRequest $coreUserExistsRequest
     * @return CoreUserExistsResponse
     */
    public function core_userExists(CoreUserExistsRequest $coreUserExistsRequest)
    {
      return $this->__soapCall('core_userExists', array($coreUserExistsRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceRequest $cashCreateInvoiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice(CashCreateInvoiceRequest $cashCreateInvoiceRequest)
    {
      return $this->__soapCall('cash_createInvoice', array($cashCreateInvoiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtendedRequest $cashCreateInvoiceExtendedRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceExtended(CashCreateInvoiceExtendedRequest $cashCreateInvoiceExtendedRequest)
    {
      return $this->__soapCall('cash_createInvoiceExtended', array($cashCreateInvoiceExtendedRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtended2Request $cashCreateInvoiceExtended2Request
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice2Extended(CashCreateInvoiceExtended2Request $cashCreateInvoiceExtended2Request)
    {
      return $this->__soapCall('cash_createInvoice2Extended', array($cashCreateInvoiceExtended2Request));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceByServiceRequest $cashCreateInvoiceByServiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceByService(CashCreateInvoiceByServiceRequest $cashCreateInvoiceByServiceRequest)
    {
      return $this->__soapCall('cash_createInvoiceByService', array($cashCreateInvoiceByServiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceWithCurrencyRequest $cashCreateInvoiceWithCurrencyRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceWithCurrency(CashCreateInvoiceWithCurrencyRequest $cashCreateInvoiceWithCurrencyRequest)
    {
      return $this->__soapCall('cash_createInvoiceWithCurrency', array($cashCreateInvoiceWithCurrencyRequest));
    }

    /**
     * prepaid card perform
     *
     * @param CashPrepaidCardPerformRequest $cashPrepaidCardPerformRequest
     * @return CashPrepaidCardPerformResponse
     */
    public function cash_prepaidCardPerform(CashPrepaidCardPerformRequest $cashPrepaidCardPerformRequest)
    {
      return $this->__soapCall('cash_prepaidCardPerform', array($cashPrepaidCardPerformRequest));
    }

    /**
     * prepaid card
     *
     * @param CashPrepaidCardRequest $cashPrepaidCardRequest
     * @return CashPrepaidCardResponse
     */
    public function cash_prepaidCard(CashPrepaidCardRequest $cashPrepaidCardRequest)
    {
      return $this->__soapCall('cash_prepaidCard', array($cashPrepaidCardRequest));
    }

    /**
     * prepaid card get commission
     *
     * @param CashPrepaidCardCommissionRequest $cashPrepaidCardCommissionRequest
     * @return CashPrepaidCardCommissionResponse
     */
    public function cash_prepaidCardCommission(CashPrepaidCardCommissionRequest $cashPrepaidCardCommissionRequest)
    {
      return $this->__soapCall('cash_prepaidCardCommission', array($cashPrepaidCardCommissionRequest));
    }

    /**
     * @param CreateOperation $createOperation
     * @return CreateOperationResponse
     */
    public function createOperation(CreateOperation $createOperation)
    {
      return $this->__soapCall('createOperation', array($createOperation));
    }

    /**
     * @param CreateOperationRequest $createOperation
     * @return CreateOperationResponse
     */
    public function createOperationFake(CreateOperationRequest $createOperation)
    {
      return $this->__soapCall('createOperationFake', array($createOperation));
    }

    /**
     * @param PayConfirmRequest $PayConfirmRequest
     * @return CreateOperationResponse
     */
    public function payConfirm(PayConfirmRequest $PayConfirmRequest)
    {
      return $this->__soapCall('payConfirm', array($PayConfirmRequest));
    }

    /**
     * @param PayTransferConfirmRequest $PayTransferConfirmRequest
     * @return CreateOperationResponse
     */
    public function payTransferConfirm(PayTransferConfirmRequest $PayTransferConfirmRequest)
    {
      return $this->__soapCall('payTransferConfirm', array($PayTransferConfirmRequest));
    }

    /**
     * @param CoreRequestConfirmationCodeRequest $coreRequestConfirmationCodeRequest
     * @return CoreRequestConfirmationCodeResponse
     */
    public function core_requestConfirmationCode(CoreRequestConfirmationCodeRequest $coreRequestConfirmationCodeRequest)
    {
      return $this->__soapCall('core_requestConfirmationCode', array($coreRequestConfirmationCodeRequest));
    }

    /**
     * @param CoreBeelineSMSNotificationRequest $coreBeelineSMSNotificationRequest
     * @return CoreBeelineSMSNotificationResponse
     */
    public function core_beelineSMSNotification(CoreBeelineSMSNotificationRequest $coreBeelineSMSNotificationRequest)
    {
      return $this->__soapCall('core_beelineSMSNotification', array($coreBeelineSMSNotificationRequest));
    }

    /**
     * @param CoreKcellSMSNotificationRequest $coreKcellSMSNotificationRequest
     * @return CoreKcellSMSNotificationResponse
     */
    public function core_kcellSMSNotification(CoreKcellSMSNotificationRequest $coreKcellSMSNotificationRequest)
    {
      return $this->__soapCall('core_kcellSMSNotification', array($coreKcellSMSNotificationRequest));
    }

    /**
     * Get operation receipt by Oberthur MFS id
     *
     * @param CashGetReceiptForTransactionRequest $cashGetReceiptForTransactionRequest
     * @return CashGetReceiptForTransactionResponse
     */
    public function cash_getReceiptForTransaction(CashGetReceiptForTransactionRequest $cashGetReceiptForTransactionRequest)
    {
      return $this->__soapCall('cash_getReceiptForTransaction', array($cashGetReceiptForTransactionRequest));
    }

    /**
     * @param CoreGetMobileOperatorRequest $coreGetMobileOperatorRequest
     * @return CoreGetMobileOperatorResponse
     */
    public function core_getMobileOperator(CoreGetMobileOperatorRequest $coreGetMobileOperatorRequest)
    {
      return $this->__soapCall('core_getMobileOperator', array($coreGetMobileOperatorRequest));
    }

    /**
     * @param CashGetOperationDataExtendedRequest $cashGetOperationDataExtendedRequest
     * @return CashGetOperationDataExtendedResponse
     */
    public function cash_getOperationDataExtended(CashGetOperationDataExtendedRequest $cashGetOperationDataExtendedRequest)
    {
      return $this->__soapCall('cash_getOperationDataExtended', array($cashGetOperationDataExtendedRequest));
    }

    /**
     * @param CashGetOperationDataByExtIdRequest $cashGetOperationDataByExtIdRequest
     * @return CashGetOperationDataByExtIdResponse
     */
    public function cash_getOperationDataByExtId(CashGetOperationDataByExtIdRequest $cashGetOperationDataByExtIdRequest)
    {
      return $this->__soapCall('cash_getOperationDataByExtId', array($cashGetOperationDataByExtIdRequest));
    }

}
