<?php
function calculateLuhnDigit($number) {
    $sum = 0;
    $flip = true;

    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $digit = $number[$i];
        if ($flip) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $sum += $digit;
        $flip = !$flip;
    }

    return (10 - ($sum % 10)) % 10;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bin = $_POST['bin'];
    $quantity = $_POST['quantity'];
    $expiryYear = $_POST['expiryYear'];
    $expiryMonth = $_POST['expiryMonth'];
    $cvv = $_POST['cvv'];

    if (empty($bin)) {
        echo "BIN is not entered";
    } else {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://lookup.binlist.net/".$bin);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $output = json_decode($output, true);

        $country = $output['country']['emoji'];
        $brand = $output['scheme'];
        $type = $output['type'];

        $results = [];
        for($i=0; $i<$quantity; $i++){
            $cardLength = 16;  // typical length for most card types
            $cvvLength = 3;  // typical length for most card types

            // Adjust card length and CVV length based on the first digit of BIN
            if ($bin[0] == "3") {  // American Express
                $cardLength = 15;
                $cvvLength = 4;
            } else if ($bin[0] == "4") {  // Visa
                // default lengths are already set for Visa
            } else if ($bin[0] == "5") {  // MasterCard
                // default lengths are already set for MasterCard
            }

            $cardNumber = $bin;
            while (strlen($cardNumber) < $cardLength - 1) {
                $cardNumber .= rand(0, 9);
            }
            $cardNumber .= calculateLuhnDigit($cardNumber);

            // Generate expiry date and cvv if not provided
            if(empty($expiryYear)) $expiryYearGenerated = rand(date('Y'), 2031); else $expiryYearGenerated = $expiryYear;
            if(empty($expiryMonth)) $expiryMonthGenerated = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT); else $expiryMonthGenerated = $expiryMonth;
            if(empty($cvv)) {
                if($cvvLength == 4) {
                    $cvvGenerated = rand(1000, 9999);
                } else {
                    $cvvGenerated = rand(100, 999);
                }
            } else {
                $cvvGenerated = $cvv;
            }

            $results[] = "$cardNumber|$expiryMonthGenerated|$expiryYearGenerated|$cvvGenerated";
        }

        $response = [
            'cards' => $results,
            'binInfo' => [
                'country' => $country,
                'brand' => $brand,
                'type' => $type,
            ],
        ];

        echo json_encode($response);
    }

    exit(); // This is needed to stop further processing by PHP after the response
}
?>
