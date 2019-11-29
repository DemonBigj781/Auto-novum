<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$cantShortlinks = 7;
$ShortlinksURLAPI = [
    ''
];
$ShortlinksViewsPerIP = [
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
