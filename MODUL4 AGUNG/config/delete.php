<?php

include("connector.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM showroom_agung WHERE id_mobil=$id";
    $query = mysqli_query($db, $sql);

    if($query) {
        session_start();
        $_SESSION['msg'] = 'dsuccess';
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCarmobil.php'>";
    } else {
        session_start();
        $_SESSION['msg'] = 'dfailed';
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCarmobil.php'>";
    }
}
?>