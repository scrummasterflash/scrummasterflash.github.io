<?php
if (isset($_POST['submit'])){
    $status = $_REQUEST['tweet'];

$consumerKey = 'xEGRrBMHHGMkgXSCwpqQyvD4X';
$consumerSecret = 'ZpxWH8RA5igcnQQJYJxhYOShZ8c08Gr5WZYBdsdVDZ8fUvO9tq';
$accessToken = '1055959410563076096-HYwBQIISR6WTC8CIo6VK4yJTpFPyfl';
$accessTokenSecret = 'C9RPxHGKzDQHfeJBTKkfF6R2Dws0vqccoHE41M8TqhTrp';
    
require "../WebContent/lib/twitteroauth/autoload.php";
    
use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$content = $connection->get("account/verify_credentials");


$postStatus = $connection->post("statuses/update", ["status" => $status]);

}
else{
    echo '<script>console.log("error")</script>';
}
?>