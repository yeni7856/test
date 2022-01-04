<meta charset="utf-8">
<?php
session_start();
$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];

include "../inc/dbcon.php";

$sql = "select idx, u_name, u_id, u_pwd from members where u_id='$u_id';";

$result = mysqli_query($dbcon,$sql);

$num = mysqli_num_rows($result);

if(!$num){
    echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 아이디가 없습니다.\");
            history.back();
        </script> 
        ";
        exit;   
}else{
    $array = mysqli_fetch_array($result);
    if($u_pwd != $array["u_pwd"]){
        echo "
        <script type=\"text/javascript\">
            alert(\"일치하는 비밀번호가 없습니다.\");
            history.back();
        </script> 
        ";   
        exit;
    }

    $_SESSION["s_idx"] = $array["idx"];
    $_SESSION["s_name"] = $array["u_name"];
    $_SESSION["s_id"] = $array["u_pwd"];
    
    mysqli_close($dbcon);
    echo "
        <script type=\"text/javascript\">
            location.href=\"../index.php\";
        </script>
    ";
};
?>