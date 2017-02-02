<?php
require __DIR__ . '/vendor/autoload.php';

$logger = new Monolog\Logger('Judopay');
$logger->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//$logger->addWarning('Foo');

$judopay = new \Judopay(
    array(
        'apiToken' => 'MgI5Wj9qcC5ofsTd',
        'apiSecret' => '40c75aeb17d8e60a9bf0d3430e99475bae25b58080012f185fbe4be0c8d55960',
        'judoId' => '1100747-435',
        //Set to true on production, defaults to false which is the sandbox
        'useProduction' => false,
		'logger' => $logger
    )
);

$payment = $judopay->getModel('WebPayments\Payment');

try
{

$payment->setAttributeValues(
    array(
        'judoId' => '100747-435',   
        'yourConsumerReference' => $ConsumerReference,
        'yourPaymentReference' => $PaymentReference,
        'amount' => 1, //$amount,
        'currency' => $currency,
        'clientIpAddress' => $_SERVER['REMOTE_ADDR'] ,
        'clientUserAgent' => $_SERVER['HTTP_USER_AGENT'],
    )
);

//echo $ConsumerReference . '  ';
//echo $PaymentReference . '   ';
//echo $amount . '   ';

$webpaymentDetails = $payment->create();
	
} 
catch (Exception $e) 
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

$theWebPaymentReference = $webpaymentDetails["reference"];
$formPostUrl = $webpaymentDetails["postUrl"];
?>
	
