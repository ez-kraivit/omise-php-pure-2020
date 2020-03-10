<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

define('OMISE_PUBLIC_KEY', 'นำคีย์ของท่านมาใส่');
define('OMISE_SECRET_KEY', 'นำคีย์ของท่านมาใส่');
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
