<?php  
  if (session_status() == PHP_SESSION_NONE) {
    // セッションは有効で、開始していないとき
    session_start();
  } 
?><!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<title>PHP Programs</title>

<link rel="stylesheet" href="style.css">

</head>  <!-- ここまでがページの仕様 映らない-->
<body>