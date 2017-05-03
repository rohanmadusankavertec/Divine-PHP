<?php include 'au.com.gateway.client/GatewayClient.php'; ?>
<?php include 'au.com.gateway.client.config/ClientConfig.php'; ?>
<?php include 'au.com.gateway.client.component/RequestHeader.php'; ?>
<?php include 'au.com.gateway.client.component/CreditCard.php'; ?>
<?php include 'au.com.gateway.client.component/TransactionAmount.php'; ?>
<?php include 'au.com.gateway.client.component/Redirect.php'; ?>
<?php include 'au.com.gateway.client.facade/BaseFacade.php'; ?>
<?php include 'au.com.gateway.client.facade/Payment.php'; ?>
<?php include 'au.com.gateway.client.payment/PaymentRealTimeRequest.php'; ?>
<?php include 'au.com.gateway.client.payment/PaymentRealTimeResponse.php'; ?>
<?php include 'au.com.gateway.client.root/PaycorpRequest.php'; ?>
<?php include 'au.com.gateway.client.utils/IJsonHelper.php'; ?>
<?php include 'au.com.gateway.client.helpers/PaymentRealTimeJsonHelper.php'; ?>
<?php include 'au.com.gateway.client.utils/HmacUtils.php'; ?>
<?php include 'au.com.gateway.client.utils/CommonUtils.php'; ?>
<?php include 'au.com.gateway.client.utils/RestClient.php'; ?>
<?php include 'au.com.gateway.client.enums/TransactionType.php'; ?>
<?php include 'au.com.gateway.client.enums/Version.php'; ?>
<?php include 'au.com.gateway.client.enums/Operation.php'; ?>
<?php include 'au.com.gateway.client.facade/Vault.php'; ?>








<?php

//$authToken = $_POST['authToken'];
//$hmac = $_POST['hmac'];
//$clientId = (int) $_POST['clientId'];
//$originalTxnReference = $_POST['originalTxnReference'];
//$transactionType = $_POST['transactionType'];

//$cardType = $_POST['cardType'];
//$cardNo = $_POST['cardNo'];
//$expiryDate = $_POST['expiryDate'];
//$secureId = $_POST['secureId'];

//$totalAmount = (float) $_POST['totalAmount'];
//$serviceFeeAmount = (float) $_POST['serviceFeeAmount'];
//$paymentAmount = (float) $_POST['paymentAmount'];
//$currency = $_POST['currency'];

//date_default_timezone_set('Asia/Colombo');

/* ------------------------------------------------------------------------------
  STEP1: Build PaycorpClientConfig object
  ------------------------------------------------------------------------------ */
$clientConfig = new ClientConfig();
$clientConfig->setServiceEndpoint("https://sampath.paycorp.com.au/rest/service/proxy");
$clientConfig->setAuthToken("f11c2072-4e7b-4514-8353-4c5ede025714");
$clientConfig->setHmacSecret("drCWcYNoSganTytA");

/* ------------------------------------------------------------------------------
  STEP2: Build PaycorpClient object
  ------------------------------------------------------------------------------ */
$client = new GatewayClient($clientConfig);
/* ------------------------------------------------------------------------------
  STEP3: Build PaymentRealTimeRequest object
  ------------------------------------------------------------------------------ */

$realTimeRequest = new PaymentRealTimeRequest();
$realTimeRequest->setClientId("14000743");
$realTimeRequest->setTransactionType(TransactionType::$PURCHASE);
//$realTimeRequest->setOriginalTxnReference($originalTxnReference);
//$realTimeRequest->setClientRef("cvdb-123");
$realTimeRequest->setComment("testing");
$extraData = array("invoice-no" => "I99999", "Order-no" => "J10101");
//$realTimeRequest->setExtraData($exData);
// sets credit-card details
$creditCard = new CreditCard();
$creditCard->setType("VISA");
$creditCard->setHolderName("Rohan Madusanka");
$creditCard->setExpiry("0919");
$creditCard->setNumber("4216890404996676");
$creditCard->setSecureId("660");
$creditCard->setSecureIdSupplied(TRUE);
$realTimeRequest->setCreditCard($creditCard);
// sets transaction-amounts details (all amounts are in cents)

$transactionAmount = new TransactionAmount("10");
$realTimeRequest->setTransactionAmount($transactionAmount);
$realTimeRequest->setClientRef("merchant_reference");
$realTimeRequest->setComment("merchant_additional_data");
//$transactionAmount->setTotalAmount();
$transactionAmount->setServiceFeeAmount("10");
$transactionAmount->setPaymentAmount("10");
$transactionAmount->setServiceFeeAmount();
$transactionAmount->setCurrency("LKR");

/* ------------------------------------------------------------------------------
  STEP4: Process PaycorpRealTimeRequest object
  ------------------------------------------------------------------------------ */
$realTimeResponse = $client->getPayment()->realTime($realTimeRequest);



echo "TxnRef - " + $realTimeResponse->getTxnReference();
echo "Response Code - " + $realTimeResponse->getResponseCode();
echo "Response Text - " + $realTimeResponse->getResponseText();
echo "Settlement Date - " + $realTimeResponse->getSettlementDate();
echo "Auth Code - " + $realTimeResponse->getAuthCode();
