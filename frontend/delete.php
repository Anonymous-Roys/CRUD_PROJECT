<?php
require_once("../backend/conn.php");

if (isset($_GET['Del'])){
    $id = $_GET['Del'];

    $query = "DELETE FROM signup WHERE id = '$id'";

    $result = mysqli_query($conn, $query);  

    if ($result){
        header("location: view.php");
    }else{
        echo "Please check your query";

    }

}else{
    header("location: view.php");
}

?>