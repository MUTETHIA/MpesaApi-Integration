  <?php
  header("Content-Type:application/json");
  // require_once('config.php');
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
$OrgAccountBalance=$payment->OrgAccountBalance;
$ThirdPartyTransID=$payment->ThirdPartyTransID;
$MSISDN=$payment->MSISDN;
$FirstName=$payment->FirstName;
$MiddleName=$payment->MiddleName;
$LastName=$payment->LastName;
                    //SOAPUI
$sql= "INSERT INTO payment(TransactionType,TransID,TransTime,TransAmount,BusinessShortCode,BillRefNumber,InvoiceNumber,OrgAccountBalance,ThirdPartyTransID,MSISDN,FirstName,MiddleName,LastName)
VALUES('$transtype','$transID','$TransTime','$TransAmount','$BusinessShortCode','$BillRefNumber','$InvoiceNumber','$OrgAccountBalance','$ThirdPartyTransID','$MSISDN','$FirstName','$MiddleName','$LastName')";
$result=mysqli_query($conn,$sql);
if($result){
   echo '{"ResultCode":0,"ResultDesc":"Confirmation received successfully"}';
}
else{
    echo '"ResultCode":1,"ResultDesc":"Confirmation Failed"}';
}
  ?>