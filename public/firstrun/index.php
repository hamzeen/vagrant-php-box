<?php

include ('../common/Database.class.php');
$dbHelper = new Database();

$database = "contactdb";
$tbl_member = "member";

$sql = 'CREATE DATABASE IF NOT EXISTS contactdb';
$dbHelper->createDatabase($database, $sql);

$sql = 'CREATE TABLE IF NOT EXISTS  member ( '.
    'id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, '.
    'email varchar(255) NOT NULL UNIQUE, '.
    'password int(10) NOT NULL, '.
    'PRIMARY KEY (id) '.
    ') ENGINE=InnoDB DEFAULT CHARSET=latin1';
$dbHelper->createTable($database, $tbl_member, $sql);


?>