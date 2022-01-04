<?php
    $u_id = $_POST["u_id"];
    include "../inc/dbcon.php";
    $sql = "select u_id from members where u_id='$u_id';";
    $result = mysqli_query($dbcon, $sql);

    $num = mysqli_num_rows($result);

    $return_val = "";
    if(!$num){
        $return_val = "사용할 수 있는 아이디입니다. 사용하겠습니까?";
    } else{
        $return_val = "사용할 수 없는 아이디입니다.";
    };

    echo $return_val;
?>