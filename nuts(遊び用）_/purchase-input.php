<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php


if (empty($_SESSION['product'])) {
	echo 'カートに商品がありません。';
	exit;
}


$pdo = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8', 'ttsite_tt23', 'Asdf3333');

//商品を1つずつ取り出すループ。
foreach ($_SESSION['product'] as $id => $product) {

	$sql = $pdo->prepare(
		'select * 
		from product 
		where id=? '
	);

	$sql->execute([$id]);
	$cnt++;


//取り出した商品に対して条件確認。
	foreach ($sql as $row) {

		 if (!isset($_SESSION['customer'])) {
			echo '購入手続きを行うにはログインしてください。';
			exit;
		} elseif($row['onsale'] !== "1"){
			 
				echo  '・'.$_SESSION['product'][$id]['name'] . "<br>";
				$onsale_count++;

		
		
		
			
		} else{
			$c++;
		}
	}
}

//商品自体の条件と出力。

if($onsale_count > 0){

	echo "は現在売り切れです。カートから削除してください。";
	exit;}


if($cnt===$c) {
	echo '<p>お名前：', $_SESSION['customer']['name'], '</p>';
	echo '<p>ご住所：', $_SESSION['customer']['address'], '</p>';
	echo '<hr>';
	require 'cart.php';
	echo '<hr>';
	echo '<p>内容をご確認いただき、購入を確定してください。</p>';
	echo '<a href="purchase-output.php">購入を確定する</a>';
}

require 'footer.php'; ?>