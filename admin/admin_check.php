<meta charset="utf-8">
<?php
session_start();
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";

if($s_id != ""){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 권한이 필요합니다.\");
            location.href=\"../index.php\";
        </script>
    ";
};
?>