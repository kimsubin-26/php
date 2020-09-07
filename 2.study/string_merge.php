<?php
$num1 = "010";
$num2 = "1234";
$num3 = "5678";
$phone_number = $num1."-".$num2."-".$num3;//핸드폰 입력시 첫번쨰 두번째 세번쨰 입력하는걸 표현함 - 슬래시 도 넣어줌
//num 1, num2, num3를 하나의 문자열로 만들기위해 문자열 연결 연산자 (.)을 사용한다
echo "휴대폰 번호 : $phone_number"."<br>";

$email1 = "admin";
$email2 = "codingschool.info";
$email = $email1."@".$email2;
echo "이메일 주소 : $email";

?>