<?php
$exampleLink = "https://trackchanges.postlight.com/building-awesome-cms-f034344d8ed";

$link = $_POST['url'];
var_dump($_POST['url']);
echo "<br><br>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://mercury.postlight.com/parser?url=".$link);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "x-api-key: AU5zjyEqyL0LgR8zkb4Iurhlenpn52bGtbiqJA4t",
));

$x = curl_exec($ch);
curl_close($ch);
?>
