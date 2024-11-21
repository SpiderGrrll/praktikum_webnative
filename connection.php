<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbName = 'dbpraktikum';

$conn = new mysqli($host, $username, $password, $dbName);
if ($conn->connect_error) {
    die('koneksi database gagal ');
}