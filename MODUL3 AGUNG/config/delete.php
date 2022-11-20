<?php

include("connector.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM showroom_agung_table WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);

    if($delete) {
        session_start();
        $_SESSION['msg'] = 'dsuccess';
        redirect('../pages/ListCarmobil.php');
    } else {
        session_start();
        $_SESSION['msg'] = 'dfailed';
        return redirect('../pages/ListCarmobil.php');
    }
}
?>