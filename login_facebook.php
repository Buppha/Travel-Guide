<?php
session_start();
ini_set('display_errors', 1);
require_once __DIR__ . '/Facebook/autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRedirectLoginHelper;


$fb = new Facebook\Facebook([
  'app_id' => '1744974852241330',
  'app_secret' => '97c93ca9b9acca0d59f6e62cd1a0cda8',
  'default_graph_version' => 'v2.11',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email', 'user_likes']; // optional

$loginUrl = $helper->getLoginUrl('http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>