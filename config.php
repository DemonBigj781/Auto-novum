<?php
  /* A message for people to see on the main page */
  $cfg_MOTD = 'MOTD';
  $cfg_ad_rotate =true; //  enable the rotation of advertisements
  $cfg_url = 'url without http or https'; //url of site
  $cfg_refresh_time = 120; // Payout time in seconds.
  $cfg_real_refresh_time = $cfg_refresh_time; // Refresh time of the claim page.

  /* Enable and disable currencies. */
  $cfg_BTC_enabled  = false;
  $cfg_BCH_enabled  = false;
  $cfg_BLK_enabled  = false;
  $cfg_BCN_enabled  = false;
  $cfg_DASH_enabled = false;
  $cfg_DGB_enabled  = false;
  $cfg_DOGE_enabled = false;
  $cfg_ETH_enabled  = false;
  $cfg_EXG_enabled = false;
  $cfg_EXS_enabled = false;
  $cfg_LSK_enabled  = false;
  $cfg_LTC_enabled  = false;
  $cfg_XMR_enabled  = false;
  $cfg_NEO_enabled  = false;
  $cfg_PPC_enabled  = false;
  $cfg_POT_enabled  = false;
  $cfg_XRP_enabled  = false;
  $cfg_STRAT_enabled  = false;
  $cfg_TRX_enabled  = false;
  $cfg_WAVES_enabled  = false;
  $cfg_ZEC_enabled  = false;

  $cfg_BTC_amount  = intval((1 / 60) * $cfg_refresh_time);
  $cfg_BCH_amount  = intval((20 / 60) * $cfg_refresh_time);
  $cfg_BLK_amount  = intval((200 / 60) * $cfg_refresh_time);
  $cfg_BCN_amount  = intval((400000 / 60) * $cfg_refresh_time);
  $cfg_DASH_amount = intval((20 / 60) * $cfg_refresh_time);
  $cfg_DGB_amount = intval((20 / 60) * $cfg_refresh_time);
  $cfg_DOGE_amount = intval((10000 / 60) * $cfg_refresh_time);
  $cfg_ETH_amount  = intval((20 / 60) * $cfg_refresh_time);
  $cfg_EXG_amount = intval((10 / 60) * $cfg_refresh_time);
  $cfg_EXS_amount = intval((1100 / 60) * $cfg_refresh_time);
  $cfg_LSK_amount = intval((200 / 60) * $cfg_refresh_time);
  $cfg_LTC_amount  = intval((20 / 60) * $cfg_refresh_time);
  $cfg_XMR_amount = intval((20 / 60) * $cfg_refresh_time);
  $cfg_NEO_amount  = intval((25 / 60) * $cfg_refresh_time);
  $cfg_PPC_amount  = intval((600 / 60) * $cfg_refresh_time);
  $cfg_POT_amount  = intval((200 / 60) * $cfg_refresh_time);
  $cfg_XRP_amount  = intval((900 / 60) * $cfg_refresh_time);
  $cfg_STRAT_amount  = intval((100 / 60) * $cfg_refresh_time);
  $cfg_TRX_amount  = intval((25 / 60) * $cfg_refresh_time);
  $cfg_WAVES_amount  = intval((200 / 60) * $cfg_refresh_time);
  $cfg_ZEC_amount  = intval((5 / 60) * $cfg_refresh_time);

  /* Make sure that the faucet is set up under the "PTP" and "Mining" categories on Faucet Hub's
   * faucet manager page, or users could get their accounts frozen for claiming too often! */

  /* Faucet Hub API Key(s)
   * You can set them all to the same key if you want.
   * Some people just like to register a different "faucet" for each currency. */
  $cfg_BTC_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_BCH_ap_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_BLK_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_BCN_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_DASH_api_key = 'yourexpresscryptoapicode12345678910';
  $cfg_DGB_api_key = 'yourexpresscryptoapicode12345678910';
  $cfg_DOGE_api_key = 'yourexpresscryptoapicode12345678910';
  $cfg_ETH_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_EXG_api_key = 'yourexpresscryptoapicode12345678910';
  $cfg_EXS_api_key = 'yourexpresscryptoapicode12345678910';
  $cfg_LSK_api_key = 'yourexpresscryptoapicode12345678910';
  $cfg_LTC_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_XMR_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_NEO_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_PPC_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_POT_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_XRP_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_STRAT_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_TRX_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_WAVES_api_key  = 'yourexpresscryptoapicode12345678910';
  $cfg_ZEC_api_key  = 'yourexpresscryptoapicode12345678910';

  /* Set this to true and the faucet will automatically ban some botters and abusers by adding `deny from IP_ADDRESS` lines to /.htaccess */
  /* Leave this disabled unless your server uses .htaccess files and you are fine with an automated script modifying it! */
  $cfg_enable_ban = true;

  /* Should return the user's IP address. Change it if you use CloudFlare. */
  function user_ip() {
    return $_SERVER['REMOTE_ADDR'];
  }

  $cfg_cookie_key = 'DIE BOTS DIE'; // Set this to a secret string that only you know.

  /* The default CAPTCHA is coinhive, and the default shortlink is eliwin;
   * you can change them, but you've got to rewrite captcha.lib.php or shortlink.lib.php yourself. */

  $cfg_use_captcha = true; // Set this to false to disable the CAPTCHA
  $cfg_miner_mode = "jsecoin"; //the mode for the miner eathe jsecoin, coinimp, or "iframe only"
  if ($cfg_use_captcha) {
    $cfg_coinhive_captcha_site = '';
    $cfg_coinhive_captcha_secret = 'Coinhivesecretkey';
    $cfg_iframe_code = '';// for inserting code into iframe
    $cfg_jse_account_number ='999999'; //you jse account number
    $cfg_coinimp_site_key = 'youcoinimpsitekey';// your coinimp site key
  }

  $cfg_use_shortlink = false; // It says eliwin but its linkrex
  if ($cfg_use_shortlink) {
    // You can change the shortlink provider in shortlink.lib.php
    // Changed to btcms: http://btc.ms/ref/japakar
    $cfg_eliwin_key = 'sortlinkapi1234567890';
  }

  $cfg_enable_nastyhosts = false; // Whether to check with nastyhosts on the claim page.
  if ($cfg_enable_nastyhosts) {
    $cfg_nastyhost_whitelist = [ // IP addresses that you don't want to check
      'IP address' => 'description (can be anything you want)',
      '8.8.8.8' => 'Generic IP address',
      '127.0.0.1' => 'someone',
    ];
  }

  $cfg_enable_iphub = false; // If you want to use IPHub instead (might as well disable NastyHosts first) (you _can_ use both, if you hate everyone)
  if ($cfg_enable_iphub) {
    $cfg_iphub_key = 'XXXREDACTEDXXXXXXXXXXXXXXXXXXXXXSnB4TDd0c1hTbXpI';
    $cfg_iphub_block_level = 1; // https://iphub.info/api

    $cfg_iphub_whitelist = [ // IP addresses that you don't want to check
      'IP address' => 'description (can be anything you want)',
      '8.8.8.8' => 'Generic IP address',
      '127.0.0.1' => 'someone',
    ];
  }

  /* Google Analytics options. */
  $cfg_enable_google_analytics = false;
  if ($cfg_enable_google_analytics) {
    $cfg_ga_ID = 'UA-109588352-2'; // your tracking ID
    /* Be sure to go to
     *  [Admin > All Web Site Data > View Settings]
     * and set "Exclude URL Query Parameters" to:
     *   r,rc,address,currency,key
    */
  }

  $cfg_ec_username = 'User123'; // Your ExpressCrypto username.
  $cfg_ec_userToken = 'DIE BOTS DIE'; // Your server IP.
  $cfg_site_name = 'My Faucet'; // The faucet name.
  $cfg_site_url = 'exapmle.com'; // The URL of the faucet.

  /* Set this to the version of the faucet source you are using. (see http://semver.org)
   * If you change the source, be sure to add "+mod" (modified) to the version! */
  $cfg__VERSION = 'expresscrypto';
  //$cfg__VERSION = '4.5.4+.mod';
?>
