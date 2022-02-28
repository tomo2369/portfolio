<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
	$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8','ttsite_tt23', 'Asdf3333');
	$sql=$pdo->prepare('insert into favorite values(?,?)');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'お気に入りに商品を追加しました。';
	echo '<hr>';
	require 'favorite.php';
} else {
	echo 'お気に入りに商品を追加するには、ログインしてください。';
}
?>
<?php require 'footer.php'; ?>