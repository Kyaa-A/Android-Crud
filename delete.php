<?php
    require "conn.php";

    if(!empty($_POST['id'])){
        $id = $_POST['id'];

        $sql = "DELETE from tbl_user where user_id = '".$id."'";

        if(mysqli_query($connect, $sql)){
            echo "Delete";
        }else {
            echo "Fail";
        }
    } else {
        echo "Field Require";
    }

?>