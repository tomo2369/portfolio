<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
	$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8','ttsite_tt23', 'Asdf3333');
	$sql=$pdo->prepare(
		'delete from cart_prepare_purchase where customer_id=? and product_id=?');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'カートから商品を削除しました。';
	echo '<hr>';
} else {
	echo 'カートから商品を削除するには、ログインしてください。';
}
require 'cart.php';
?>
<?php require 'footer.php'; ?>