<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8','ttsite_tt23', 'Asdf3333');
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$ans[]=$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
var_dump($ans);
foreach ($aql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 
		'address'=>$row['address'], 'login'=>$row['login'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}
?>
<?php require 'footer.php'; ?>