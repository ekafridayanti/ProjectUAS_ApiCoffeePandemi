<?php

include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$total = $_POST['total'];
$gender = $_POST['gender'];

$sql = "UPDATE tb_pelanggan set 
        
        nama='$nama', 
        email='$email', 
        gender='$gender', 
        total='$total' WHERE id='$id'";
       
$result = $connect->query($sql);

if($result){
    echo json_encode(array(
        "succes" => true,
      
    ));
}else{
    echo json_encode(array(
        "succes" => false,
   
    ));
}