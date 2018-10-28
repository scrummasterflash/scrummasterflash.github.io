<?php
if (isset($_POST['submit'])){
    $status = $_REQUEST['tweet'];
    echo '<h2>The status is ' .$status .'</h2>';

require "../WebContent/lib/twitteroauth/autoload.php";
require "../config.php"
    
use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$content = $connection->get("account/verify_credentials");


$postStatus = $connection->post("statuses/update", ["status" => "hello world from SocialMediaIntegration.php"]);

    echo '<h2>The tweet was sent. </h2>'
}
else{
    echo '<script>console.log("error")</script>';
}
?>