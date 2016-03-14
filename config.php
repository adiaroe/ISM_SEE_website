<?php
include_once("inc/facebook.php"); //include facebook SDK
$appId = '1138444256180779';
$appSecret = 'e3def54141c53296f6238c213abee561';
$homeurl = 'http://localhost/ism_see_website/';
$fbPermissions = 'email';
//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbuser = $facebook->getUser();
?>