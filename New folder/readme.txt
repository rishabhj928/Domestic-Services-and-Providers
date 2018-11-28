To view records in mysql, open cmd and type

1) cd C:\xampp\mysql\bin
2) mysql -u root -p

It will ask for password, just press [enter], no need to type a password.

database name is 'registration'
table name is 'users' for login/signup info
table name is 'details' for user details info
table name is 'service' for user service info

[ IMP: MODIFY FOOTER OF ALL, MAKE PROPER ROUTING IN ALL PAGES ]

work on service.php page, insert into database new table from final variables,
then complete by doing simple payment dialog.


---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Online SMS send, for OTP verification

api_key = Acgk8Xfvhp2MquCbiyGneLHWFJ3am1DEYISNVz9wR5otQ7s4K6cEs8d1VuNH72fmGboryTvtp4UJD0in
msg = kachamacha
mob = mobile_number_to_send_sms
https://www.fast2sms.com/dev/bulk?authorization=api_key&sender_id=FSTSMS&message=msg&language=english&route=p&numbers=mob&flash=0
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------------------------------------------------
<code>
<?php
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "This is Test message",
    "language" => "english",
    "route" => "p",
    "numbers" => "8962239013,7773854335",
    "flash" => "1"
);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: YOUR_API_KEY",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>

-------------------------------------------------------------------------------------------------------------------------------------------------------------------