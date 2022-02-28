<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>

<meta http-equiv="refresh" content="2;URL=http://ttsite.php.xdomain.jp/nuts-shop/product.php">

<?php require 'footer.php'; ?>