<?php

namespace jRazer\Wooppay\WSDL;

class XmlControllerServiceCustom extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CoreLoginRequest' => 'jRazer\\Wooppay\\WSDL\\CoreLoginRequestCustom',
  'CoreLoginResponse' => 'jRazer\\Wooppay\\WSDL\\CoreLoginResponseCustom',
  'CoreLoginResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreLoginResponseDataCustom',
  'stringArray' => 'jRazer\\Wooppay\\WSDL\\stringArrayCustom',
  'CoreLogoutRequest' => 'jRazer\\Wooppay\\WSDL\\CoreLogoutRequestCustom',
  'CoreLogoutResponse' => 'jRazer\\Wooppay\\WSDL\\CoreLogoutResponseCustom',
  'CoreSmthRequest' => 'jRazer\\Wooppay\\WSDL\\CoreSmthRequestCustom',
  'CoreSmthResponse' => 'jRazer\\Wooppay\\WSDL\\CoreSmthResponseCustom',
  'CashCreateOperationRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateOperationRequestCustom',
  'CashCreateOperationResponse' => 'jRazer\\Wooppay\\WSDL\\CashCreateOperationResponseCustom',
  'CashCreateOperationResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCreateOperationResponseDataCustom',
  'CashConfirmOperationRequest' => 'jRazer\\Wooppay\\WSDL\\CashConfirmOperationRequestCustom',
  'CashConfirmOperationResponse' => 'jRazer\\Wooppay\\WSDL\\CashConfirmOperationResponseCustom',
  'CashConfirmOperationExtRequest' => 'jRazer\\Wooppay\\WSDL\\CashConfirmOperationExtRequestCustom',
  'CashDischargementRequest' => 'jRazer\\Wooppay\\WSDL\\CashDischargementRequestCustom',
  'CashDischargementResponse' => 'jRazer\\Wooppay\\WSDL\\CashDischargementResponseCustom',
  'CashTransferRequest' => 'jRazer\\Wooppay\\WSDL\\CashTransferRequestCustom',
  'CashTransferResponse' => 'jRazer\\Wooppay\\WSDL\\CashTransferResponseCustom',
  'CashGetTransfersRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersRequestCustom',
  'intArray' => 'jRazer\\Wooppay\\WSDL\\intArrayCustom',
  'CashGetTransfersResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseCustom',
  'CashGetTransfersResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataCustom',
  'CashGetTransfersResponseDataRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordArrayCustom',
  'CashGetTransfersResponseDataRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordCustom',
  'CashGetTransfersResponseDataRecordService' => 'jRazer\\Wooppay\\WSDL\\CashGetTransfersResponseDataRecordServiceCustom',
  'CashGetCommissionRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetCommissionRequestCustom',
  'CashGetCommissionResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetCommissionResponseCustom',
  'CashGetCommissionResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetCommissionResponseDataCustom',
  'CoreGetServiceIDByNameRequest' => 'jRazer\\Wooppay\\WSDL\\CoreGetServiceIDByNameRequestCustom',
  'CoreGetServiceIDByNameResponse' => 'jRazer\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponseCustom',
  'CoreGetServiceIDByNameResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreGetServiceIDByNameResponseDataCustom',
  'CashGetBalanceRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetBalanceRequestCustom',
  'CashGetBalanceResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetBalanceResponseCustom',
  'CashGetBalanceResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetBalanceResponseDataCustom',
  'ServiceGetCategoriesRequest' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesRequestCustom',
  'ServiceGetCategoriesResponse' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseCustom',
  'ServiceGetCategoriesResponseData' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCustom',
  'ServiceGetCategoriesResponseDataCategoriesArray' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategoriesArrayCustom',
  'ServiceGetCategoriesResponseDataCategories' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataCategoriesCustom',
  'ServiceGetCategoriesResponseDataServicesArray' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServicesArrayCustom',
  'ServiceGetCategoriesResponseDataServices' => 'jRazer\\Wooppay\\WSDL\\ServiceGetCategoriesResponseDataServicesCustom',
  'CashDeclineRequest' => 'jRazer\\Wooppay\\WSDL\\CashDeclineRequestCustom',
  'CashDeclineResponse' => 'jRazer\\Wooppay\\WSDL\\CashDeclineResponseCustom',
  'CashSetOperationsStatusRequest' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusRequestCustom',
  'CashSetOperationsStatusRequestRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecordArrayCustom',
  'CashSetOperationsStatusRequestRecord' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusRequestRecordCustom',
  'CashSetOperationsStatusResponse' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusResponseCustom',
  'CashSetOperationsStatusResponseRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecordArrayCustom',
  'CashSetOperationsStatusResponseRecord' => 'jRazer\\Wooppay\\WSDL\\CashSetOperationsStatusResponseRecordCustom',
  'CashGetOperationsStatusRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusRequestCustom',
  'CashGetOperationsStatusResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusResponseCustom',
  'CashGetOperationsStatusResponseRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecordArrayCustom',
  'CashGetOperationsStatusResponseRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationsStatusResponseRecordCustom',
  'CashCashOutRequest' => 'jRazer\\Wooppay\\WSDL\\CashCashOutRequestCustom',
  'CashCashOutResponse' => 'jRazer\\Wooppay\\WSDL\\CashCashOutResponseCustom',
  'CashCashOutResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCashOutResponseDataCustom',
  'CashCashOutCompleteRequest' => 'jRazer\\Wooppay\\WSDL\\CashCashOutCompleteRequestCustom',
  'CashCashOutCompleteResponse' => 'jRazer\\Wooppay\\WSDL\\CashCashOutCompleteResponseCustom',
  'CashCashOutInputDataRequest' => 'jRazer\\Wooppay\\WSDL\\CashCashOutInputDataRequestCustom',
  'CashCashOutInputDataResponse' => 'jRazer\\Wooppay\\WSDL\\CashCashOutInputDataResponseCustom',
  'CashReturnRequest' => 'jRazer\\Wooppay\\WSDL\\CashReturnRequestCustom',
  'CashReturnResponse' => 'jRazer\\Wooppay\\WSDL\\CashReturnResponseCustom',
  'CashReturnPartialRequest' => 'jRazer\\Wooppay\\WSDL\\CashReturnPartialRequestCustom',
  'CashReturnPartialResponse' => 'jRazer\\Wooppay\\WSDL\\CashReturnPartialResponseCustom',
  'CashMobileRefundRequest' => 'jRazer\\Wooppay\\WSDL\\CashMobileRefundRequestCustom',
  'CashMobileRefundResponse' => 'jRazer\\Wooppay\\WSDL\\CashMobileRefundResponseCustom',
  'CoreUserSearchRequest' => 'jRazer\\Wooppay\\WSDL\\CoreUserSearchRequestCustom',
  'CoreUserSearchResponse' => 'jRazer\\Wooppay\\WSDL\\CoreUserSearchResponseCustom',
  'CoreUserSearchResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreUserSearchResponseDataCustom',
  'SystemGetConfigRequest' => 'jRazer\\Wooppay\\WSDL\\SystemGetConfigRequestCustom',
  'SystemGetConfigResponse' => 'jRazer\\Wooppay\\WSDL\\SystemGetConfigResponseCustom',
  'SystemGetConfigResponseData' => 'jRazer\\Wooppay\\WSDL\\SystemGetConfigResponseDataCustom',
  'CashRequestTransferRequest' => 'jRazer\\Wooppay\\WSDL\\CashRequestTransferRequestCustom',
  'CashRequestTransferResponse' => 'jRazer\\Wooppay\\WSDL\\CashRequestTransferResponseCustom',
  'CashRequestTransferResponseData' => 'jRazer\\Wooppay\\WSDL\\CashRequestTransferResponseDataCustom',
  'CashInvoicingRequest' => 'jRazer\\Wooppay\\WSDL\\CashInvoicingRequestCustom',
  'CashInvoicingResponse' => 'jRazer\\Wooppay\\WSDL\\CashInvoicingResponseCustom',
  'CashInvoicingResponseData' => 'jRazer\\Wooppay\\WSDL\\CashInvoicingResponseDataCustom',
  'CashGetServiceFieldsRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsRequestCustom',
  'CashGetServiceFieldsResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsResponseCustom',
  'CashGetServiceFieldsResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsResponseDataCustom',
  'CashGetServiceFieldsExtendedRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetServiceFieldsExtendedRequestCustom',
  'CashCheckServiceFieldsRequest' => 'jRazer\\Wooppay\\WSDL\\CashCheckServiceFieldsRequestCustom',
  'CashCheckServiceFieldsResponse' => 'jRazer\\Wooppay\\WSDL\\CashCheckServiceFieldsResponseCustom',
  'CashCheckServiceFieldsResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCheckServiceFieldsResponseDataCustom',
  'CashGetOperationReceiptRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationReceiptRequestCustom',
  'CashGetOperationReceiptResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationReceiptResponseCustom',
  'CashGetOperationReceiptResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationReceiptResponseDataCustom',
  'CashGetOperationDataRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataRequestCustom',
  'CashGetOperationDataResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseCustom',
  'CashGetOperationDataResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseDataCustom',
  'CashGetOperationDataResponseDataRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecordArrayCustom',
  'CashGetOperationDataResponseDataRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataResponseDataRecordCustom',
  'CoreUserExistsRequest' => 'jRazer\\Wooppay\\WSDL\\CoreUserExistsRequestCustom',
  'CoreUserExistsResponse' => 'jRazer\\Wooppay\\WSDL\\CoreUserExistsResponseCustom',
  'CashCreateInvoiceRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceRequestCustom',
  'CashCreateInvoiceResponse' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceResponseCustom',
  'CashCreateInvoiceResponseData' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceResponseDataCustom',
  'CashCreateInvoiceExtendedRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceExtendedRequestCustom',
  'CashCreateInvoiceExtended2Request' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceExtended2RequestCustom',
  'CashCreateInvoiceByServiceRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceByServiceRequestCustom',
  'CashCreateInvoiceWithCurrencyRequest' => 'jRazer\\Wooppay\\WSDL\\CashCreateInvoiceWithCurrencyRequestCustom',
  'CashPrepaidCardPerformRequest' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardPerformRequestCustom',
  'CashPrepaidCardPerformResponse' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardPerformResponseCustom',
  'CashPrepaidCardPerformResponseData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardPerformResponseDataCustom',
  'CashPrepaidCardRequest' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardRequestCustom',
  'CashPrepaidCardRequestData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardRequestDataCustom',
  'CashPrepaidCardResponse' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardResponseCustom',
  'CashPrepaidCardResponseData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardResponseDataCustom',
  'CashPrepaidCardCommissionRequest' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardCommissionRequestCustom',
  'CashPrepaidCardCommissionResponse' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponseCustom',
  'CashPrepaidCardCommissionResponseData' => 'jRazer\\Wooppay\\WSDL\\CashPrepaidCardCommissionResponseDataCustom',
  'CreateOperation' => 'jRazer\\Wooppay\\WSDL\\CreateOperationCustom',
  'CreateOperationResponse' => 'jRazer\\Wooppay\\WSDL\\CreateOperationResponseCustom',
  'CreateOperationRequest' => 'jRazer\\Wooppay\\WSDL\\CreateOperationRequestCustom',
  'PayConfirmRequest' => 'jRazer\\Wooppay\\WSDL\\PayConfirmRequestCustom',
  'PayTransferConfirmRequest' => 'jRazer\\Wooppay\\WSDL\\PayTransferConfirmRequestCustom',
  'CoreRequestConfirmationCodeRequest' => 'jRazer\\Wooppay\\WSDL\\CoreRequestConfirmationCodeRequestCustom',
  'CoreRequestConfirmationCodeResponse' => 'jRazer\\Wooppay\\WSDL\\CoreRequestConfirmationCodeResponseCustom',
  'CoreBeelineSMSNotificationRequest' => 'jRazer\\Wooppay\\WSDL\\CoreBeelineSMSNotificationRequestCustom',
  'CoreBeelineSMSNotificationResponse' => 'jRazer\\Wooppay\\WSDL\\CoreBeelineSMSNotificationResponseCustom',
  'CoreKcellSMSNotificationRequest' => 'jRazer\\Wooppay\\WSDL\\CoreKcellSMSNotificationRequestCustom',
  'CoreKcellSMSNotificationResponse' => 'jRazer\\Wooppay\\WSDL\\CoreKcellSMSNotificationResponseCustom',
  'CashGetReceiptForTransactionRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetReceiptForTransactionRequestCustom',
  'CashGetReceiptForTransactionResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponseCustom',
  'CashGetReceiptForTransactionResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetReceiptForTransactionResponseDataCustom',
  'CoreGetMobileOperatorRequest' => 'jRazer\\Wooppay\\WSDL\\CoreGetMobileOperatorRequestCustom',
  'CoreGetMobileOperatorResponse' => 'jRazer\\Wooppay\\WSDL\\CoreGetMobileOperatorResponseCustom',
  'CoreGetMobileOperatorResponseData' => 'jRazer\\Wooppay\\WSDL\\CoreGetMobileOperatorResponseDataCustom',
  'CashGetOperationDataExtendedRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedRequestCustom',
  'CashGetOperationDataExtendedResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseCustom',
  'CashGetOperationDataExtendedResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataCustom',
  'CashGetOperationDataExtendedResponseDataRecordArray' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecordArrayCustom',
  'CashGetOperationDataExtendedResponseDataRecord' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataExtendedResponseDataRecordCustom',
  'CashGetOperationDataByExtIdRequest' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataByExtIdRequestCustom',
  'CashGetOperationDataByExtIdResponse' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponseCustom',
  'CashGetOperationDataByExtIdResponseData' => 'jRazer\\Wooppay\\WSDL\\CashGetOperationDataByExtIdResponseDataCustom',
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
     * @param CoreLoginRequestCustom $coreLoginRequest
     * @return CoreLoginResponse
     */
    public function core_login($coreLoginRequest)
    {
      return $this->__soapCall('core_login', array($coreLoginRequest));
    }

    /**
     * Logout action
     *
     * @param CoreLogoutRequestCustom $coreLogoutRequest
     * @return CoreLogoutResponse
     */
    public function core_logout($coreLogoutRequest)
    {
      return $this->__soapCall('core_logout', array($coreLogoutRequest));
    }

    /**
     * Test action
     *
     * @param CoreSmthRequestCustom $coreSmthRequest
     * @return CoreSmthResponse
     */
    public function core_smth($coreSmthRequest)
    {
      return $this->__soapCall('core_smth', array($coreSmthRequest));
    }

    /**
     * Create new money operation
     *
     * @param CashCreateOperationRequestCustom $cashCreateOperationRequest
     * @return CashCreateOperationResponse
     */
    public function cash_createOperation($cashCreateOperationRequest)
    {
      return $this->__soapCall('cash_createOperation', array($cashCreateOperationRequest));
    }

    /**
     * Confirm money operation
     *
     * @param CashConfirmOperationRequestCustom $cashConfirmOperationRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperation($cashConfirmOperationRequest)
    {
      return $this->__soapCall('cash_confirmOperation', array($cashConfirmOperationRequest));
    }

    /**
     * Confirm money operation with confirmation code
     *
     * @param CashConfirmOperationExtRequestCustom $cashConfirmOperationExtRequest
     * @return CashConfirmOperationResponse
     */
    public function cash_confirmOperationExt($cashConfirmOperationExtRequest)
    {
      return $this->__soapCall('cash_confirmOperationExt', array($cashConfirmOperationExtRequest));
    }

    /**
     * Dischargement money
     *
     * @param CashDischargementRequestCustom $cashDischargementRequest
     * @return CashDischargementResponse
     */
    public function cash_dischargement($cashDischargementRequest)
    {
      return $this->__soapCall('cash_dischargement', array($cashDischargementRequest));
    }

    /**
     * Transfer money
     *
     * @param CashTransferRequestCustom $cashTransferRequest
     * @return CashTransferResponse
     */
    public function cash_transfer($cashTransferRequest)
    {
      return $this->__soapCall('cash_transfer', array($cashTransferRequest));
    }

    /**
     * Get transfer/payment list
     *
     * @param CashGetTransfersRequestCustom $cashGetTransfersRequest
     * @return CashGetTransfersResponse
     */
    public function cash_getTransfers($cashGetTransfersRequest)
    {
      return $this->__soapCall('cash_getTransfers', array($cashGetTransfersRequest));
    }

    /**
     * Get commission
     *
     * @param CashGetCommissionRequestCustom $cashGetCommissionRequest
     * @return CashGetCommissionResponse
     */
    public function cash_getCommission($cashGetCommissionRequest)
    {
      return $this->__soapCall('cash_getCommission', array($cashGetCommissionRequest));
    }

    /**
     * Get service id
     *
     * @param CoreGetServiceIDByNameRequestCustom $cashGetServiceIDByNameRequest
     * @return CoreGetServiceIDByNameResponse
     */
    public function core_getServiceIDByName($cashGetServiceIDByNameRequest)
    {
      return $this->__soapCall('core_getServiceIDByName', array($cashGetServiceIDByNameRequest));
    }

    /**
     * @param CashGetBalanceRequestCustom $cashGetBalanceRequest
     * @return CashGetBalanceResponse
     */
    public function cash_getBalance($cashGetBalanceRequest)
    {
      return $this->__soapCall('cash_getBalance', array($cashGetBalanceRequest));
    }

    /**
     * get categories
     *
     * @param ServiceGetCategoriesRequestCustom $serviceGetCategoriesRequest
     * @return ServiceGetCategoriesResponse
     */
    public function service_getCategories($serviceGetCategoriesRequest)
    {
      return $this->__soapCall('service_getCategories', array($serviceGetCategoriesRequest));
    }

    /**
     * Cancels/declines operation
     *
     * @param CashDeclineRequestCustom $cashDeclineRequest
     * @return CashDeclineResponse
     */
    public function cash_decline($cashDeclineRequest)
    {
      return $this->__soapCall('cash_decline', array($cashDeclineRequest));
    }

    /**
     * Set operations status
     *
     * @param CashSetOperationsStatusRequestCustom $cashSetOperationsStatusRequest
     * @return CashSetOperationsStatusResponse
     */
    public function cash_setOperationsStatus($cashSetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_setOperationsStatus', array($cashSetOperationsStatusRequest));
    }

    /**
     * Get operations status
     *
     * @param CashGetOperationsStatusRequestCustom $cashGetOperationsStatusRequest
     * @return CashGetOperationsStatusResponse
     */
    public function cash_getOperationsStatus($cashGetOperationsStatusRequest)
    {
      return $this->__soapCall('cash_getOperationsStatus', array($cashGetOperationsStatusRequest));
    }

    /**
     * Cash out
     *
     * @param CashCashOutRequestCustom $cashCashOutRequest
     * @return CashCashOutResponse
     */
    public function cash_cashOut($cashCashOutRequest)
    {
      return $this->__soapCall('cash_cashOut', array($cashCashOutRequest));
    }

    /**
     * Cash out complete
     *
     * @param CashCashOutCompleteRequestCustom $cashCashOutCompleteRequest
     * @return CashCashOutCompleteResponse
     */
    public function cash_cashOutComplete($cashCashOutCompleteRequest)
    {
      return $this->__soapCall('cash_cashOutComplete', array($cashCashOutCompleteRequest));
    }

    /**
     * Cash out input data
     *
     * @param CashCashOutInputDataRequestCustom $cashCashOutInputDataRequest
     * @return CashCashOutInputDataResponse
     */
    public function cash_cashOutInputData($cashCashOutInputDataRequest)
    {
      return $this->__soapCall('cash_cashOutInputData', array($cashCashOutInputDataRequest));
    }

    /**
     * Return payment operation
     *
     * @param CashReturnRequestCustom $cashReturnRequest
     * @return CashReturnResponse
     */
    public function cash_paymentReturn($cashReturnRequest)
    {
      return $this->__soapCall('cash_paymentReturn', array($cashReturnRequest));
    }

    /**
     * Partial return payment operation
     *
     * @param CashReturnPartialRequestCustom $cashReturnPartialRequest
     * @return CashReturnPartialResponse
     */
    public function cash_paymentReturnPartial($cashReturnPartialRequest)
    {
      return $this->__soapCall('cash_paymentReturnPartial', array($cashReturnPartialRequest));
    }

    /**
     * Refund mobile payment operation
     *
     * @param CashMobileRefundRequestCustom $cashMobileRefundRequest
     * @return CashMobileRefundResponse
     */
    public function cash_mobileRefund($cashMobileRefundRequest)
    {
      return $this->__soapCall('cash_mobileRefund', array($cashMobileRefundRequest));
    }

    /**
     * User search
     *
     * @param CoreUserSearchRequestCustom $coreUserSearchRequest
     * @return CoreUserSearchResponse
     */
    public function core_userSearch($coreUserSearchRequest)
    {
      return $this->__soapCall('core_userSearch', array($coreUserSearchRequest));
    }

    /**
     * Get system config
     *
     * @param SystemGetConfigRequestCustom $systemGetConfigRequest
     * @return SystemGetConfigResponse
     */
    public function system_getConfig($systemGetConfigRequest)
    {
      return $this->__soapCall('system_getConfig', array($systemGetConfigRequest));
    }

    /**
     * Send transfer request
     *
     * @param CashRequestTransferRequestCustom $cashRequestTransferRequest
     * @return CashRequestTransferResponse
     */
    public function cash_requestTransfer($cashRequestTransferRequest)
    {
      return $this->__soapCall('cash_requestTransfer', array($cashRequestTransferRequest));
    }

    /**
     * Send invoice
     *
     * @param CashInvoicingRequestCustom $cashInvoicingRequest
     * @return CashInvoicingResponse
     */
    public function cash_invoicing($cashInvoicingRequest)
    {
      return $this->__soapCall('cash_invoicing', array($cashInvoicingRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsRequestCustom $cashGetServiceFieldsRequest
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFields($cashGetServiceFieldsRequest)
    {
      return $this->__soapCall('cash_getServiceFields', array($cashGetServiceFieldsRequest));
    }

    /**
     * Get service fields
     *
     * @param CashGetServiceFieldsExtendedRequestCustom $cashGetServiceFieldsExtended
     * @return CashGetServiceFieldsResponse
     */
    public function cash_getServiceFieldsExtended($cashGetServiceFieldsExtended)
    {
      return $this->__soapCall('cash_getServiceFieldsExtended', array($cashGetServiceFieldsExtended));
    }

    /**
     * Check service fields
     *
     * @param CashCheckServiceFieldsRequestCustom $cashCheckServiceFieldsRequest
     * @return CashCheckServiceFieldsResponse
     */
    public function cash_checkServiceFields($cashCheckServiceFieldsRequest)
    {
      return $this->__soapCall('cash_checkServiceFields', array($cashCheckServiceFieldsRequest));
    }

    /**
     * Get operation receipt
     *
     * @param CashGetOperationReceiptRequestCustom $cashGetOperationReceiptRequest
     * @return CashGetOperationReceiptResponse
     */
    public function cash_getOperationReceipt($cashGetOperationReceiptRequest)
    {
      return $this->__soapCall('cash_getOperationReceipt', array($cashGetOperationReceiptRequest));
    }

    /**
     * @param CashGetOperationDataRequestCustom $cashGetOperationDataRequest
     * @return CashGetOperationDataResponse
     */
    public function cash_getOperationData($cashGetOperationDataRequest)
    {
      return $this->__soapCall('cash_getOperationData', array($cashGetOperationDataRequest));
    }

    /**
     * User existing checking
     *
     * @param CoreUserExistsRequestCustom $coreUserExistsRequest
     * @return CoreUserExistsResponse
     */
    public function core_userExists($coreUserExistsRequest)
    {
      return $this->__soapCall('core_userExists', array($coreUserExistsRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceRequestCustom $cashCreateInvoiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice($cashCreateInvoiceRequest)
    {
      return $this->__soapCall('cash_createInvoice', array($cashCreateInvoiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtendedRequestCustom $cashCreateInvoiceExtendedRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceExtended($cashCreateInvoiceExtendedRequest)
    {
      return $this->__soapCall('cash_createInvoiceExtended', array($cashCreateInvoiceExtendedRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceExtended2RequestCustom $cashCreateInvoiceExtended2Request
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoice2Extended($cashCreateInvoiceExtended2Request)
    {
      return $this->__soapCall('cash_createInvoice2Extended', array($cashCreateInvoiceExtended2Request));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceByServiceRequestCustom $cashCreateInvoiceByServiceRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceByService($cashCreateInvoiceByServiceRequest)
    {
      return $this->__soapCall('cash_createInvoiceByService', array($cashCreateInvoiceByServiceRequest));
    }

    /**
     * create invoice
     *
     * @param CashCreateInvoiceWithCurrencyRequestCustom $cashCreateInvoiceWithCurrencyRequest
     * @return CashCreateInvoiceResponse
     */
    public function cash_createInvoiceWithCurrency($cashCreateInvoiceWithCurrencyRequest)
    {
      return $this->__soapCall('cash_createInvoiceWithCurrency', array($cashCreateInvoiceWithCurrencyRequest));
    }

    /**
     * prepaid card perform
     *
     * @param CashPrepaidCardPerformRequestCustom $cashPrepaidCardPerformRequest
     * @return CashPrepaidCardPerformResponse
     */
    public function cash_prepaidCardPerform($cashPrepaidCardPerformRequest)
    {
      return $this->__soapCall('cash_prepaidCardPerform', array($cashPrepaidCardPerformRequest));
    }

    /**
     * prepaid card
     *
     * @param CashPrepaidCardRequestCustom $cashPrepaidCardRequest
     * @return CashPrepaidCardResponse
     */
    public function cash_prepaidCard($cashPrepaidCardRequest)
    {
      return $this->__soapCall('cash_prepaidCard', array($cashPrepaidCardRequest));
    }

    /**
     * prepaid card get commission
     *
     * @param CashPrepaidCardCommissionRequestCustom $cashPrepaidCardCommissionRequest
     * @return CashPrepaidCardCommissionResponse
     */
    public function cash_prepaidCardCommission($cashPrepaidCardCommissionRequest)
    {
      return $this->__soapCall('cash_prepaidCardCommission', array($cashPrepaidCardCommissionRequest));
    }

    /**
     * @param CreateOperationCustom $createOperation
     * @return CreateOperationResponse
     */
    public function createOperation($createOperation)
    {
      return $this->__soapCall('createOperation', array($createOperation));
    }

    /**
     * @param CreateOperationRequestCustom $createOperation
     * @return CreateOperationResponse
     */
    public function createOperationFake($createOperation)
    {
      return $this->__soapCall('createOperationFake', array($createOperation));
    }

    /**
     * @param PayConfirmRequestCustom $PayConfirmRequest
     * @return CreateOperationResponse
     */
    public function payConfirm($PayConfirmRequest)
    {
      return $this->__soapCall('payConfirm', array($PayConfirmRequest));
    }

    /**
     * @param PayTransferConfirmRequestCustom $PayTransferConfirmRequest
     * @return CreateOperationResponse
     */
    public function payTransferConfirm($PayTransferConfirmRequest)
    {
      return $this->__soapCall('payTransferConfirm', array($PayTransferConfirmRequest));
    }

    /**
     * @param CoreRequestConfirmationCodeRequestCustom $coreRequestConfirmationCodeRequest
     * @return CoreRequestConfirmationCodeResponse
     */
    public function core_requestConfirmationCode($coreRequestConfirmationCodeRequest)
    {
      return $this->__soapCall('core_requestConfirmationCode', array($coreRequestConfirmationCodeRequest));
    }

    /**
     * @param CoreBeelineSMSNotificationRequestCustom $coreBeelineSMSNotificationRequest
     * @return CoreBeelineSMSNotificationResponse
     */
    public function core_beelineSMSNotification($coreBeelineSMSNotificationRequest)
    {
      return $this->__soapCall('core_beelineSMSNotification', array($coreBeelineSMSNotificationRequest));
    }

    /**
     * @param CoreKcellSMSNotificationRequestCustom $coreKcellSMSNotificationRequest
     * @return CoreKcellSMSNotificationResponse
     */
    public function core_kcellSMSNotification($coreKcellSMSNotificationRequest)
    {
      return $this->__soapCall('core_kcellSMSNotification', array($coreKcellSMSNotificationRequest));
    }

    /**
     * Get operation receipt by Oberthur MFS id
     *
     * @param CashGetReceiptForTransactionRequestCustom $cashGetReceiptForTransactionRequest
     * @return CashGetReceiptForTransactionResponse
     */
    public function cash_getReceiptForTransaction($cashGetReceiptForTransactionRequest)
    {
      return $this->__soapCall('cash_getReceiptForTransaction', array($cashGetReceiptForTransactionRequest));
    }

    /**
     * @param CoreGetMobileOperatorRequestCustom $coreGetMobileOperatorRequest
     * @return CoreGetMobileOperatorResponse
     */
    public function core_getMobileOperator($coreGetMobileOperatorRequest)
    {
      return $this->__soapCall('core_getMobileOperator', array($coreGetMobileOperatorRequest));
    }

    /**
     * @param CashGetOperationDataExtendedRequestCustom $cashGetOperationDataExtendedRequest
     * @return CashGetOperationDataExtendedResponse
     */
    public function cash_getOperationDataExtended($cashGetOperationDataExtendedRequest)
    {
      return $this->__soapCall('cash_getOperationDataExtended', array($cashGetOperationDataExtendedRequest));
    }

    /**
     * @param CashGetOperationDataByExtIdRequestCustom $cashGetOperationDataByExtIdRequest
     * @return CashGetOperationDataByExtIdResponse
     */
    public function cash_getOperationDataByExtId($cashGetOperationDataByExtIdRequest)
    {
      return $this->__soapCall('cash_getOperationDataByExtId', array($cashGetOperationDataByExtIdRequest));
    }

}
