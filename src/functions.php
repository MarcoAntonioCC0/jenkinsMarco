<?php
function reverseString($text){
    return strrev($text);
}

function toUpperCase($text){
    return strtoupper($text);
}

function toLowerCase($text){
    return strtolower($text);
}

function countLetters($text){
    return strlen($text);
}
//probando

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $text = $_POST['text'];
    $action = $_POST['action'];

    switch ($action) {
        case 'reverse':
            $result = reverseString($text);
            break;
        case 'uppercase':
            $result = toUpperCase($text);
            break;
        case 'lowercase':
            $result = toLowerCase($text);
            break;
        case 'count':
            $result = countLetters($text);
            break;
        default:
            $result = "Invalid action";
            break;
    }
    echo json_encode($result);
}


