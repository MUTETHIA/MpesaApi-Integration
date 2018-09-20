    <?php
     //require_once('config.php');
header("Content-Type:application/json");

if(!$request=file_get_contents('php://input'))
{
echo "invalid input";
exit();
}
$payment=json_decode($request);
$transtype=$payment->TransactionType;
$transID=$payment->TransID;
$TransTime=$payment->TransTime;
$TransAmount=$payment->TransAmount;
$BusinessShortCode=$payment->BusinessShortCode;
$BillRefNumber=$payment->BillRefNumber;
$InvoiceNumber=$payment->InvoiceNumber;
$ThirdPartyTransID=$payment->ThirdPartyTransID;
$MSISDN=$payment->MSISDN;
$FirstName=$payment->FirstName;
$MiddleName=$payment->MiddleName;
$LastName=$payment->LastName;
//parse
if($BillRefNumber==12345){
	        $resultdesc="Valid Account. Accept payment";
            $response ='{"ResultCode":0, "ResultDesc":"'. $resultdesc.'","ThirdPartyTransID": 0}';
            echo $response;
}


else{
	        $resultdesc="Invalid Account. Cancel payment";
            $response ='{"ResultCode":1, "ResultDesc":"'. $resultdesc.'","ThirdPartyTransID": 0}';
            echo $response;
}


    ?>