<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$cantShortlinks = 3;
$ShortlinksURLAPI = [
    'http://fc.lc/api?api=ab0833aa18c3c6ebe2534ac287357a6db3cd2e83',
    'http://fc.lc/api?api=ab0833aa18c3c6ebe2534ac287357a6db3cd2e83',
    'http://fc.lc/api?api=ab0833aa18c3c6ebe2534ac287357a6db3cd2e83'
    //the shorteners above are in thanks to admincount, owner of 100count.com
];
$ShortlinksViewsPerIP = [
    1,
    1,
    1
];
function shortlink_create($longurl, $id) {
  global $cfg_eliwin_key;
  global $cantShortlinks;
  global $ShortlinksURLAPI;

  $long_url = urlencode($longurl);
  $api_url = $ShortlinksURLAPI[$id]."&url={$long_url}";
  $result = @json_decode(file_get_contents($api_url),TRUE);

  if($result['status'] === 'error')
    echo ''.($result["message"][0]);
  else
    return $result['shortenedUrl'];
}
?>
