<?php 
session_start();

$db = new PDO('mysql:host=127.0.0.1;dbname=16niry', '16niry', 'niklas321');

function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function alert($string, $type = 'success') {
    return '<div class="alert alert-'.$type.'" role="alert" id="form-alert">'.$string.'</div>';
}