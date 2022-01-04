<meta charset="utf-8">
<?php
$u_name = $_POST["u_name"];
$mobile = $_POST["mobile"];
$u_id = $_POST["u_id"];
$u_pwd = $_POST["u_pwd"];
$re_pwd = $_POST["re_pwd"];
$birth = $_POST["birth"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$email = $_POST["email_id"];
$reg_date = date("Y-m-d");

// echo "<p>이름 : ".$u_name."</p>";
// echo "<p>전화번호 : ".$mobile."</p>";
// echo "<p>아이디 : ".$u_id."</p>";
// echo "<p>비밀번호 : ".$u_pwd."</p>";
// echo "<p>비밀번호 확인 : ".$re_pwd."</p>";
// echo "<p>생년월일 : ".$birth."</p>";
// echo "<p>우편번호 : ".$postalCode."</p>";
// echo "<p>기본주소 : ".$addr1."</p>";
// echo "<p>상세주소 : ".$addr2."</p>";
// echo "<p>이메일 : ".$email."</p>";


include "../inc/dbcon.php";


$sql = "insert into members(
    u_name, mobile, u_id, u_pwd, birth, postalCode, addr1, addr2, email, reg_date) values(
    '$u_name', '$mobile', '$u_id', '$u_pwd', '$birth', '$postalCode', '$addr1', '$addr2', '$email', '$reg_date');";


mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
    location.href=\"result.php\";
    </script>
";

?>