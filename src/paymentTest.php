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
$clientConfig = new ClientConfig();
$clientConfig->setServiceEndpoint("https://sampath.paycorp.com.au/rest/service/proxy");
$clientConfig->setAuthToken("f11c2072-4e7b-4514-8353-4c5ede025714");
$clientConfig->setHmacSecret("drCWcYNoSganTytA");
$client = new GatewayClient($clientConfig);

//$initRequest = new PaymentInitRequest();
//$initRequest->setClientId(14000743);
//$initRequest->setTransactionType(TransactionType::$PURCHASE);





$realTimeRequest = new PaymentRealTimeRequest();
$creditCard = new CreditCard();
$creditCard->setHolderName("Rohan Madusanka");
$creditCard->setNumber("4001001001001006");
$creditCard->setType("VISA");
$creditCard->setSecureId("660");
$creditCard->setExpiry("0919");
$realTimeRequest->setClientId(14000743);
$realTimeRequest->setTransactionType(TransactionType::$PURCHASE);
$realTimeRequest->setCreditCard($creditCard);
//$10.10 dollars
$transactionAmount = new TransactionAmount(1010);
$realTimeRequest->setTransactionAmount($transactionAmount);
$realTimeRequest->setClientRef("merchant_reference");
$realTimeRequest->setComment("merchant_additional_data");
$realTimeResponse = $client->getPayment()->realTime($realTimeRequest);



echo $realTimeResponse->getResponseCode(); 