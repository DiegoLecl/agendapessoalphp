<?php
function formatoData($data) {
    if ($data == "" || $data == null || $data == "0000-00-00") {
        return "";
    }

    $array = explode("-", $data);

    if (count($array) != 3) {
        return $data;
    }

    return $array[2] . "/" . $array[1] . "/" . $array[0];
}