<?php
    $mysqli = false;
    function connectUsersDB () {
        global $mysqli;
        $mysqli = new mysqli("127.0.0.1:3306", "root", "", "test_site");
        $mysqli->query("SET NAMES 'utf-8'");
    }

    function closeUsersDB () {
        global $mysqli;
        $mysqli->close();
    }

    function getProducts () {
        global $mysqli;
        connectUsersDB();
        $result = $mysqli->query("SELECT * FROM `products` ORDER BY `id`");
        closeUsersDB();

        return resultToArray($result);
    }

    function resultToArray ($result) {
        $array = array ();

        while (($row = $result->fetch_assoc()) != false) {
            $array[] = $row;
        }      
        return $array;
    }
?>
