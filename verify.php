<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$claim_url = $cfg_site_url . '/faucet.php?';

$first = true;
foreach ($_POST as $key => $value) {
  if ($first) {
    $claim_url .= rawurlencode($key) . '=' . rawurlencode($value);
    $first = false;
  } else {
    $claim_url .= '&' . rawurlencode($key) . '=' . rawurlencode($value);
  }
}
unset($key);
unset($value);
unset($first);

$claim_url .= '&key=' . rawurlencode(md5($_POST['address'] . ' ' . $cfg_cookie_key));

if ($cfg_use_shortlink) {
  require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/shortlink.php';

  $claim_url = shortlink_create($claim_url);
}
if ($cfg_human_verify ){
require_once($_SERVER['DOCUMENT_ROOT'] ."/lib/solvemedialib.php");
$privkey=$cfg_private_key;
$hashkey=$cfg_hash_key;
$solvemedia_response = solvemedia_check_answer($privkey,
					$_SERVER["REMOTE_ADDR"],
					$_POST["adcopy_challenge"],
					$_POST["adcopy_response"],
					$hashkey);
if (!$solvemedia_response->is_valid) {
	header('Location: '.$cfg_site_url, true, 303);
	print "Error: ".$solvemedia_response->error;
}
else {
header('Location: ' . $claim_url, true, 303);
}
}
else {
    header('Location: ' . $claim_url, true, 303);
    
}
?>
