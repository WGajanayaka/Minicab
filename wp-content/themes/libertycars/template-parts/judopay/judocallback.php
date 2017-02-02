<?php
require __DIR__ . '/vendor/autoload.php';

$logger = new Monolog\Logger('Judopay');
$logger->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$logger->addWarning('Foo');

$judopay = new \Judopay(
    array(
        'apiToken' => 'MgI5Wj9qcC5ofsTd',
        'apiSecret' => '40c75aeb17d8e60a9bf0d3430e99475bae25b58080012f185fbe4be0c8d55960 ',
        'judoId' => '1100747-435',
        //Set to true on production, defaults to false which is the sandbox
        'useProduction' => false,
	'logger' => $logger
    )
);

try
{
	// Create an instance of the WebPayment Transaction model (as web payments can either be payments or preauths we have a superclass called transaction). 
	$existingTransactionRequest = $judopay->getModel('WebPayments\Transaction');
	
	// invoke the find method passing in the reference you obtained above. 
	$transactionDetails = $existingTransactionRequest->find($theWebPaymentReference);
	//print_r($transactionDetails);
} 
catch (Exception $e) 
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// check the value of the "status" array key to confirm the payment was successful
$webpaymentStatus = $transactionDetails['status'];
$receipt = $transactionDetails["receipt"];