<?php
function find($keyword, $file){
    $characters = json_decode(file_get_contents($file), true);
    for ($i = 0; $i < count($characters); $i++) {
        if ($keyword === $characters[$i]['username']) {
            return $i;
        }
    }
}

function delete($index, $arr, $file){
    readJson($file);
    unset($arr, $index);
}

function readJson($file){
    $outputData = json_decode(file_get_contents($file), true);
    return $outputData;
}

function saveFile($user, $file){
    $data = readJson($file);
    array_push($data,$user);
    $data = json_encode($data,1);
    file_put_contents($file, $data);

}