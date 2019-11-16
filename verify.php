<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/shortlink.php';

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

 $idShortlink = 0;
  $ViewsSended = 1;
  $timeToChange = false;
global $cantShortlinks;
global $ShortlinksViewsPerIP;
for ($i=0; $i <$cantShortlinks; $i++) { 
   if(isset($_COOKIE["shortlink-".$i])){
      $ViewsSended = $_COOKIE["shortlink-".$i];
      if($ViewsSended < $ShortlinksViewsPerIP[$i]){  //SENDING NEW VIEW, SAME SHORTLINK
        $idShortlink = $i;
        $ViewsSended += 1;
        break;
      }else{
        $timeToChange = true;
      }
   }else{
      if($timeToChange){
        $idShortlink = $i;
        $ViewsSended = 1; //SENDING THE FIRST VIEW, OTHER SHORTLINK
        break;
      }
   }     
}
$claim_url .= '&key=' . rawurlencode(md5($_POST['address'] . ' ' . $cfg_cookie_key)).'&t='.(time()+$cfg_session_time).'&ids='.$idShortlink.'&v='.$ViewsSended;

if ($cfg_use_shortlink) {


  $claim_url = shortlink_create($claim_url, $idShortlink);
}

if(isset($_POST['a']) && isset($_POST['kkkk'])){
    global $cfg_key_array;
    echo implode(" ",$cfg_key_array);
}else{
if ( $cfg_human_verify == true ){
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
}
?>
