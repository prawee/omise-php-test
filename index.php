<?php
require_once __DIR__ .'/vendor/autoload.php';

define('OMISE_PUBLIC_KEY', 'pkey_test_58jf1ebx1ua9s4avy2e');
define('OMISE_SECRET_KEY', 'skey_test_58jf1ebxapkoww2reab');
define('OMISE_API_VERSION', '2017-11-02');

//retrive customer
$customer = OmiseCustomer::retrieve('cust_test_5g06vn7g7p78ayccphs');
//var_dump($customer->cards());

//update card
//$card = $customer->cards()->retrieve('card_test_5g06vmw7ymsaw5rhmkg');
//var_dump($card);
//$card->update(array(
//    'expiration_month' => 11,  //8
//    'expiration_year' => 2029, //2028
//    'name' => 'Test Test', //Test
//    'postal_code' => '10210'
//));

//create card


//list cards
//$cards = count($customer->cards()['data']);
//for($i=0; $i < $cards; $i++) {
//    var_dump($customer->cards()['data']);
//}


$token = OmiseToken::create([
    'card' => [
        'name' => 'A Y',
        'number' => '4242424242424242',
        'expiration_month' => '04',
        'expiration_year' => '2020',
        'security_code' => '111'
    ]
]);
var_dump($token['id']);