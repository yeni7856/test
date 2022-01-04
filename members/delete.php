<?php

session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
include "../inc/dbcon.php";
$sql = "delete from members where idx=$s_idx;";

mysqli_query($dbcon, $sql);

unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
        alert(\"처리되었습니다.\");
        location.href=\"../index.php\";
    </script>
";
?>