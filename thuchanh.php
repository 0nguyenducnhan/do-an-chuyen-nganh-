
<?php

function showPrice($value) {
    return number_format($value, 0, ",", ".");
}

function layHo($arr = array()) {
    if (count($arr) > 0) {
        return trim($arr[0]);
    }
    return "";
}

function layTen($arr = array()) {
    if (count($arr) > 0) {
        return trim($arr[count($arr) - 1]);
    }
    return "";
}

function layChuLot($arr = array()) {
    $chuLot = "";
    if (count($arr) > 0) {
        for ($i = 1; $i < count($arr) - 1; $i++) {
            $chuLot = $chuLot . " " . trim($arr[$i]);
        }
    }
    return $chuLot;
}

function layChuLot10($arr = array()) {
    unset($arr[0]);
    unset($arr[count($arr)]);
    $chuLot = implode(" ", $arr);
    return $chuLot;
}

if (count($_POST) > 0) {
    $txt_input = $_POST['txt_input'];
    $arr_hoTen = explode(" ", $txt_input);
    echo 'Họ: ' . layHo($arr_hoTen);
    echo "<hr>";
    echo 'Tên: ' . layTen($arr_hoTen);

    echo "<hr>";
    $arr_temp = $arr_hoTen;

    echo 'Chữ Lót: ' . layChuLot10($arr_temp);
    echo "<hr>";
    echo sha1($txt_input);
    echo "<hr>";
    echo showPrice(20000000);
}
?> 


