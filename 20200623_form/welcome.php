<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?    ?> <!-- php프로그램의 시작과 끝 -->
	<? echo "당신의 개인정보는" ?>   <!-- 문장/변수 화면출력 -->
	<? $name = "김도형에게 ♥"; ?>  <!-- 변수지정 -->
	<? echo $name; ?>     <!-- name변수의 데이터를 화면에 출력 -->

	<?
      $na = $_GET["name"];
      $mail = $_GET["mail"];
   ?> 

   <p>
      NAME : <? echo $na; ?>
      EMAIL : <? echo $mail; ?>
   </p>
</body>
</html>