<?php

include 'connection.php';

$sql = "SELECT * FROM tb_pelanggan";
$result = $connect->query($sql);

if($result->num_rows >0){
    $data = array();
    while($baris = $result->fetch_assoc()){
        $baris["foto"] = "http://192.168.1.4/db_coffee_api/foto/".$baris["foto"];
        $data[] = $baris;
    }
    echo json_encode(array(
        "succes"=>true,
        "data" => $data,
    ));
}else{
    echo json_encode(array(
        "succes" => false,
        "data" => [],
    ));
}