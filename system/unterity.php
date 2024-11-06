<?php

    function rm_charac($data) {
        $syntax = array("/", "\\", "*", "'", "\"", "(", ")", ",", ";", "%", "#", "@", "!", "&");
        return str_replace($syntax, "", $data);
    }
    function getUserId(){
        global $conn;
        $username = isset($_COOKIE['cookie']);
    }
?>
