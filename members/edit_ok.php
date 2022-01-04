<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";

$pwd = $_POST["u_pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email_id"];
$birth = $_POST["birth"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];

include "../inc/dbcon.php";

if($pwd){ // 비밀번호를 입력
    $sql = "update members set 
            u_pwd='$pwd', 
            mobile='$mobile', 
            email='$email', 
            birth='$birth', 
            postalCode='$postalCode', 
            addr1='$addr1', 
            addr2='$addr2' 
            where idx=$s_idx;";
} else{// 비밀번호를 입력X
    $sql = "update members set 
            mobile='$mobile', 
            email='$email', 
            birth='$birth', 
            postalCode='$postalCode', 
            addr1='$addr1', 
            addr2='$addr2' 
            where idx=$s_idx;";
};
mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href=\"../index.php\";
    </script>
";
?>