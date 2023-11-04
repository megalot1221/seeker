<?php
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

require "./function.php";

//================= [ CCN CHARGED HITS] =================//
$chatIds = ['6697887626'];


if (!function_exists('send_message')) {
    function send_message($chatIds, $msg) {
        $text = urlencode($msg);
        foreach ($chatIds as $chatId) {
            file_get_contents("https://api.telegram.org/bot6694747545:AAGZUtfPjUXTVy9XoeaS8jSKG3A945lfHHU/sendMessage?chat_id=$chatId&text=$text&parse_mode=HTML");
        }
    }
}

$lista="";
if(isset($_GET['lista'])){
    $sk = $_GET['lista'];
}

############[1 Req]#############

$ch = curl_init();
$api_url = 'https://api.hashphil.com/mag/?site=' . urlencode($sk);
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''));
$r1 = curl_exec($ch);
$site = trim(strip_tags(getstr($r1,'"hostname":"','"')));
$payment = trim(strip_tags(getstr($r1,'"payment_method":"','"')));
#$msg = Getstr($Stripe, '"message": "', '"');
//echo 'Info: '.$r1.'<br>';
//echo 'Payment: '.$payment.'<br>';
###############[Sender]################
  

if ((strpos($r1, '"success"'))){
  echo '<b>#CHARGED
        <br>SITE: '.$site.'
        <br>Payment Method: '.$payment.'<br><b>';
        // Do what you want with result

        $words = array("braintree", "stripe", "clover");

        foreach($words as $word) {
            if (stripos($payment,$word) !== false) {
                if (stripos($payment,"captcha") !== false) {

                }
                else {
                    send_message($chatIds, "『ӄʐռ』𝔏𝔢𝔫𝔤 LIVE SITE\n\n\nSite: <code>$site</code>\nPayment Method: <code>$payment</code>\n\nCHECKED BY: XAMJYSS143");
                }
            }
            else {

            }
        }
}
else {
echo "<b>DEAD: $sk
<br>RESPONSE: $msg ❌</b>";
}
curl_close($ch);
ob_flush();

?>
