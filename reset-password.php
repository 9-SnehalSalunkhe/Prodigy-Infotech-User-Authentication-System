<?php
include('connection.php');
$email = $_POST["email"];
$token = bin2hex(random_bytes(16));
$token_hash = hash("sha256",$token); //hashing of token algo
$expiry = date("y-m-d H:i:s", time() + 60 * 15);//expiry time
$sql= "update users set reset_token_hash =?,
                        reset_token_hash_expires_at = ? where email = ?";
$stmt = $conn->prepare($sql);
$stmt ->bind_param("sss",$token_hash,$expiry,$email);
$stmt ->execute();
?>
