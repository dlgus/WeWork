<?php
$name = $_POST['user_name'];
$password = $_POST['user_password'];

echo $name."<br>";
echo $password."<br>";

echo "암호화된 아이디 : ".hash('sha256', $name)."<br>";
echo "암호화된 비밀번호 : ".hash('sha256', $password);
?>