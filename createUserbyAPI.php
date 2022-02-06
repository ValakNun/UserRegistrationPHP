<?php
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
// Base URI is used with relative requests
'base_uri' => 'https://randomuser.me', ]);

$response = $client->request('GET', '/api');

$body = $response->getBody();
$arr_body = json_decode($body);

$conn = mysqli_connect('127.0.0.1', 'root', '', 'record') or die("Connection Failed: " . mysqli_connect_error());
$id = (string)uniqid();
$firstname = (string)$arr_body->results[0]
    ->name->first;
$lastname = (string)$arr_body->results[0]
    ->name->last;
$username = (string)$arr_body->results[0]
    ->login->username;
$password = (string)$arr_body->results[0]
    ->login->password;
$email = (string)$arr_body->results[0]->email;
$insert_query = "INSERT INTO  users (ID,FirstName, LastName, UserName, Password, Email) 
                    VALUES('$id', '$firstname', '$lastname', '$username', '$password', '$email')";

$send_query = mysqli_query($conn, $insert_query);

if ($send_query)
{
    header("location: http://localhost:8000");
    exit();
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
