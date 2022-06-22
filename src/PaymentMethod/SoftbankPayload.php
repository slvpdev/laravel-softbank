<?php

namespace Nekoding\LaravelSoftbank\PaymentMethod;

use Nekoding\LaravelSoftbank\Contract\Payload;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Annotation\Ignore;

class SoftbankPayload implements Payload
{

    /**
     * @SerializedName("merchant_id")
     */
    protected $merchantId;

    /**
     * @SerializedName("service_id")
     */
    protected $serviceId;

    /**
     * @Ignore()
     */
    protected $hashKey;

    /**
     * @SerializedName("cust_code")
     */
    protected $customerCode;

    /**
     * @SerializedName("order_id")
     */
    protected $orderId;

    /**
     * @SerializedName("item_id")
     */
    protected $itemId;

    /**
     * @SerializedName("item_name")
     */
    protected $itemName;

    /**
     * @SerializedName("tax")
     */
    protected $tax;

    /**
     * @SerializedName("amount")
     */
    protected $amount;

    /**
     * @SerializedName("sps_cust_info_return_flg")
     */
    protected $returnFlag;

    /**
     * @SerializedName("encrypted_flg")
     */
    protected $encryptFlag;

    /**
     * @SerializedName("request_date")
     */
    protected $requestDate;

    /**
     * @SerializedName("pay_method_info")
     */
    protected $paymentMethodInfo;

    /**
     * @SerializedName("sps_hashcode")
     */
    protected $payloadHash;

    /**
     * @SerializedName("sps_transaction_id")
     */
    protected $transactionId;

    /**
     * @SerializedName("tracking_id")
     */
    protected $trackingId;

    /**
     * @SerializedName("processing_datetime")
     */
    protected $processingDate;

    /**
     * @SerializedName("pay_option_manage")
     */
    protected $paymentOption;

    /**
     * Get the value of merchantId
     */ 
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * Set the value of merchantId
     *
     * @return  self
     */ 
    public function setMerchantId($merchantId): Payload
    {
        $this->merchantId = mb_convert_encoding($merchantId, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of serviceId
     */ 
    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    /**
     * Set the value of serviceId
     *
     * @return  self
     */ 
    public function setServiceId($serviceId): Payload
    {
        $this->serviceId = mb_convert_encoding($serviceId, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of hashKey
     */ 
    public function getHashKey(): ?string
    {
        return $this->hashKey;
    }

    /**
     * Set the value of hashKey
     *
     * @return  self
     */ 
    public function setHashKey($hashKey): Payload
    {
        $this->hashKey = mb_convert_encoding($hashKey, 'Shift_JIS', 'UTF-8');

        return $this;
    }
    /**
     * Get the value of api auth username
     *
     * @return  string
     * @Ignore()
     */ 
    public function getAuthUsername(): ?string
    {
        return $this->merchantId . $this->serviceId;
    }

    /**
     * Get the value of api auth password
     *
     * @return  string
     * @Ignore()
     */ 
    public function getAuthPassword(): ?string
    {
        return $this->hashKey;
    }

    /**
     * Get the value of customerCode
     */ 
    public function getCustomerCode(): ?string
    {
        return $this->customerCode;
    }

    /**
     * Set the value of customerCode
     *
     * @return  self
     */ 
    public function setCustomerCode($customerCode): Payload
    {
        $this->customerCode = mb_convert_encoding($customerCode, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of orderId
     */ 
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * Set the value of orderId
     *
     * @return  self
     */ 
    public function setOrderId($orderId): Payload
    {
        $this->orderId = mb_convert_encoding($orderId, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of itemId
     */ 
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * Set the value of itemId
     *
     * @return  self
     */ 
    public function setItemId($itemId): Payload
    {
        $this->itemId = mb_convert_encoding($itemId, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of itemName
     */ 
    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    /**
     * Set the value of itemName
     *
     * @return  self
     */ 
    public function setItemName($itemName): Payload
    {
        $this->itemName = base64_encode(mb_convert_encoding($itemName, 'Shift_JIS', 'UTF-8'));

        return $this;
    }

    /**
     * Get the value of tax
     */ 
    public function getTax(): ?int
    {
        return $this->tax;
    }

    /**
     * Set the value of tax
     *
     * @return  self
     */ 
    public function setTax($tax): Payload
    {
        $this->tax = mb_convert_encoding($tax, 'Shift_JIS', 'UTF-8');

        return $this;
    }
    /**
     * Get the value of amount
     */ 
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount): Payload
    {
        $this->amount = mb_convert_encoding($amount, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of returnFlag
     */ 
    public function getReturnFlag(): ?int
    {
        return $this->returnFlag;
    }

    /**
     * Set the value of returnFlag
     *
     * @return  self
     */ 
    public function setReturnFlag($returnFlag): Payload
    {
        $this->returnFlag = mb_convert_encoding($returnFlag, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of encryptFlag
     */ 
    public function getEncryptFlag(): ?int
    {
        return $this->encryptFlag;
    }

    /**
     * Set the value of encryptFlag
     *
     * @return  self
     */ 
    public function setEncryptFlag($encryptFlag): Payload
    {
        $this->encryptFlag = mb_convert_encoding($encryptFlag, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of requestDate
     */ 
    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }

    /**
     * Set the value of requestDate
     *
     * @return  self
     */ 
    public function setRequestDate($requestDate): Payload
    {
        $this->requestDate = mb_convert_encoding($requestDate, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of paymentMethodInfo
     */ 
    public function getPaymentMethodInfo()
    {
        return $this->paymentMethodInfo;
    }

    /**
     * Set the value of paymentMethodInfo
     *
     * @return  self
     */ 
    public function setPaymentMethodInfo($paymentMethodInfo): Payload
    {
        $this->paymentMethodInfo = $paymentMethodInfo;

        return $this;
    }

    /**
     * Get the value of payloadHash
     */ 
    public function getPayloadHash(): ?string
    {
        return $this->payloadHash;
    }

    /**
     * Set the value of payloadHash
     *
     * @return  self
     */ 
    public function setPayloadHash($payloadHash): Payload
    {
        $this->payloadHash = mb_convert_encoding($payloadHash, 'Shift_JIS', 'UTF-8');

        return $this;
    }

    /**
     * Get the value of transactionId
     */ 
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Set the value of transactionId
     *
     * @return  self
     */ 
    public function setTransactionId($transactionId): Payload
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get the value of trackingId
     */ 
    public function getTrackingId(): ?string
    {
        return $this->trackingId;
    }

    /**
     * Set the value of trackingId
     *
     * @return  self
     */ 
    public function setTrackingId($trackingId): Payload
    {
        $this->trackingId = $trackingId;

        return $this;
    }

    /**
     * Get the value of processingDate
     */ 
    public function getProcessingDate(): ?string
    {
        return $this->processingDate;
    }

    /**
     * Set the value of processingDate
     *
     * @return  self
     */ 
    public function setProcessingDate($processingDate): Payload
    {
        $this->processingDate = $processingDate;

        return $this;
    }

    /**
     * Get the value of paymentOption
     */ 
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * Set the value of paymentOption
     *
     * @return  self
     */ 
    public function setPaymentOption($paymentOption): Payload
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }
}