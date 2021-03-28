<?php
// include('../somthing.php');
// include('../../somthing.php');

$server_name = "localhost";
$user_name = "root";
$password = "";
$sql='';

try {
    $conn = new PDO("mysql:host=$server_name", $user_name, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS lightbulb_db";
    $conn->exec($sql);
    $sql = "use lightbulb_db";
    $conn->exec($sql);
    // ---------users table---------------------
    $sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone_number VARCHAR(30) NOT NULL,
    user_type VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    status INT(30) NOT NULL,
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    // -----------questions table--------------
    $sql = "CREATE TABLE IF NOT EXISTS questions (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(30) NOT NULL,
    question_type VARCHAR(30) NOT NULL,
    subject_field_lable VARCHAR(50),
    user_id INT(30) NOT NULL,
    asked_by_id INT(30) NOT NULL,
    paid INT(30) NOT NULL,
    answered INT(30) NOT NULL,
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    // ----------answers table----------------
    $sql = "CREATE TABLE IF NOT EXISTS answers (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(30) NOT NULL,
    answered_by_id INT(30) NOT NULL,
    reference_id INT(30) NOT NULL,
    answer TEXT(5000),
    approved INT(30) NOT NULL,
    copied INT(30) NOT NULL,
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    // ----------answer images---------
    $sql = "CREATE TABLE IF NOT EXISTS answer_images (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    answer_id INT(30) NOT NULL,
    image_url VARCHAR(30) NOT NULL,
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    // ----------references----------------
    $sql = "CREATE TABLE IF NOT EXISTS lightbulb_references (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    source_type VARCHAR(30) NOT NULL,
    author_last_name VARCHAR(30) NOT NULL,
    initials VARCHAR(50),
    Year_of_publication VARCHAR(30),
    month_of_publication VARCHAR(30),
    date_of_publication VARCHAR(30),
    retrieved_date VARCHAR(30),
    retrieved_month VARCHAR(30),
    retrieved_year VARCHAR(30),
    first_page VARCHAR(30),
    last_page VARCHAR(30),
    title_of_page VARCHAR(30),
    title_of_article VARCHAR(30),
    site_Name VARCHAR(30),
    https VARCHAR(30),
    https_doi VARCHAR(30),
    title_of_journal VARCHAR(30),
    volume_issue VARCHAR(30),
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    // ------approved answers payments------
    $sql = "CREATE TABLE IF NOT EXISTS approved_answers_payments (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(30) NOT NULL,
    question_id INT(30) NOT NULL,
    answer_id INT(30) NOT NULL,
    question_type VARCHAR(30) NOT NULL,
    payment_amount VARCHAR(30) NOT NULL,
    paid_status VARCHAR(30) NOT NULL,
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    // --------account credit------------
    $sql = "CREATE TABLE IF NOT EXISTS lightbulb_wallet (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(30) NOT NULL,
    debit DECIMAL(30) NOT NULL,
    email VARCHAR(50),
    phone_number VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    status VARCHAR(30) NOT NULL,
    deleted INT(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql);
    echo "DB created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}