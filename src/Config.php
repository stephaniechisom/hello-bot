<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'example',

    'accessToken' => 'EAADSzOfQaZBwBAD7TL3RsVybZACI8mcDabVjoCCfn8zxmfZCT8I9B4otZBOyHembs02TJQ2fVf1HrsJ4ahI0NfscrGufW5WqWJoS0RG6C2iCzqeFN4VvIYcNt1dXeoOH3r8u1zOMPPTWhH6YuX3F9xvcRqXux7l9ZA2ZBGQoJsm07LZAnHHux7u'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
