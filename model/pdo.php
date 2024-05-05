<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=movie", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function getdb_All($sql){
    $conn = connect();
    $sql=$conn->prepare($sql);
    $sql->execute();
    $kq = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $kq;
}

function getdb_One($sql){
    $conn = connect();
    $sql=$conn->prepare($sql);
    $sql->execute();
    $kq = $sql->fetch(PDO::FETCH_ASSOC);
    return $kq;
}

function execute($sql){
    $conn = connect();
    $sql=$conn->prepare($sql);
    $sql->execute();
}
?>