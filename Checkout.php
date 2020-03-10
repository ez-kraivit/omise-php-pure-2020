<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

define('OMISE_PUBLIC_KEY', 'pkey_test_5j654zhzz0lab3nfvk0');
define('OMISE_SECRET_KEY', 'skey_test_56lym4o9y3ph98m4c3n');
define('OMISE_API_VERSION', '2019-05-29');
require dirname(__FILE__). '/omise/lib/Omise.php';

    $add = OmiseCharge::create(array(
        'amount' => 12000,
        'currency' => 'thb',
        'card' => $_POST['omiseToken'],
    ));

    echo '<br>';
    if($add['status']=='successful'){
        echo 'Success';
    }else{
        echo 'Fail';
    }

?>