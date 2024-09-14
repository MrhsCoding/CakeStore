<?php

$conn = mysqli_connect("localhost","root","","mrhsstore");

if (!$conn) {
	echo "Connection failed!";
}

// Create Database

// try {
// 	$conn = new PDO("mysql:host=localhost", "root", "");
// 	$sql = "CREATE DATABASE budewCake";
// 	$conn->exec($sql);
// 	echo "Database created successfully!";
// } catch(Exception $e) {
// 	echo $sql . "<br>" . $e->getMessage();
// }

// Create Table

// try {
// 	$conn = new PDO("mysql:host=localhost;dbname=budewCake", "root", "");
// 	$sql = "CREATE TABLE users (
// 			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   			name VARCHAR(100) NOT NULL,
//   			email VARCHAR(150) UNIQUE,
//   			password TEXT NOT NULL,
// 			confirmPassword TEXT NOT NULL,
//   			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// 		)";
// 	$conn->exec($sql);
// 	echo "Table MyGuests created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }